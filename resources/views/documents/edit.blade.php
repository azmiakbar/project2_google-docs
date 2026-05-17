@if(session('error'))

    <p style="color:red;">
        {{ session('error') }}
    </p>

@endif
<h1>Edit Dokumen</h1>

<form action="/documents/{{ $document->id }}" method="POST">

    @csrf

    @method('PUT')

    <input type="hidden" name="last_updated_at" value="{{ $document->updated_at }}">

    <label>Judul Dokumen</label>
    <br>

    <input type="text" name="title" value="{{ $document->title }}">

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
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>