@vite(['resources/css/app.css', 'resources/js/app.js'])

<a href="/documents"
    style="color:blue;">
    Kembali
</a>

<br><br>

<h3>Nama Dokumen</h3>

<span id="document-title">

    {{ $document->title }}

</span>

<br>

<a href="/documents/{{ $document->id }}/edit"
    style="color:blue;">

    Edit Dokumen
</a>

<br><br>

<p>
    {{ $presenceCount }} user sedang membuka document ini
</p>


<br><br>


<h3>Isi Dokumen</h3>

<div id="document-content" style="border:1px solid gray; padding:20px; min-height:120px;">

    {!! $document->content !!}

</div>

<hr>

<h3>Share Link</h3>

<input
    type="text"
    value="{{ url('/documents/' . $document->id) }}"
    readonly
>

<script>
    window.addEventListener('load', function () {

        console.log('Echo listener aktif');

        window.Echo.channel('document.{{ $document->id }}')
            .listen('.document.updated', (e) => {

                console.log('Realtime masuk', e);

                document.getElementById('document-content')
                    .innerHTML = e.document.content;

                document.getElementById('document-title')
                    .innerText = e.document.title;

            });

    });
</script>