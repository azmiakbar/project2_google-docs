@vite(['resources/css/app.css', 'resources/js/app.js'])
@if(session('error'))

    <p style="color:red;">
        {{ session('error') }}
    </p>

@endif
<h1>Edit Dokumen</h1>

<p id="editor-status">

    Tidak ada user lain di editor

</p>

<form action="/documents/{{ $document->id }}" method="POST">

    @csrf

    @method('PUT')

    <input type="hidden" name="last_updated_at" value="{{ $document->updated_at }}">

    <label>Judul Dokumen</label>
    <br>

    <input type="text" id="title-input" name="title" value="{{ $document->title }}">

    <br><br>

    <label>Isi Dokumen</label>
    <br>

    <textarea id="editor" name="content">{{ $document->content }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    window.addEventListener('load', function () {

        let typingTimer;
        let isUpdatingFromRealtime = false;

        function sendTyping() {
            if (isUpdatingFromRealtime) {
                return;
            }

            fetch('/documents/{{ $document->id }}/typing', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            });
        }

        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {

                editor.model.document.on('change:data', () => {
                    sendTyping();
                });

                document.getElementById('title-input')
                    .addEventListener('input', () => {
                        sendTyping();
                    });

                if (!window.Echo) {
                    return;
                }

                window.Echo.channel('document.{{ $document->id }}')
                    .listen('.document.updated', (e) => {

                        isUpdatingFromRealtime = true;

                        editor.setData(e.document.content);

                        document.querySelector('input[name="title"]').value = e.document.title;

                        setTimeout(function () {
                            isUpdatingFromRealtime = false;
                        }, 500);

                    })
                    .listen('.user.typing', (e) => {

                        document.getElementById('editor-status')
                            .innerText = 'User lain sedang mengetik...';

                        clearTimeout(typingTimer);

                        typingTimer = setTimeout(function () {
                            document.getElementById('editor-status')
                                .innerText = 'Tidak ada user lain di editor';
                        }, 700);

                    });

            })
            .catch(error => {
                console.error(error);
            });

    });
</script>