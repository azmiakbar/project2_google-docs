@vite(['resources/css/app.css', 'resources/js/app.js'])
<a href="/documents">
    Kembali
</a>

<h1>{{ $document->title }}</h1>

<br>

<a href="/documents/{{ $document->id }}/edit">
    Edit Dokumen
</a>

<br><br>

<p>
    {{ $presenceCount }} user sedang membuka document ini

    <br>

    {{ $typingUsers }} user sedang mengetik...
</p>

<hr>

<div id="document-content">
    {!! $document->content !!}
</div>

<hr>

<h3>Share Link</h3>

<input type="text" value="{{ url('/documents/' . $document->id) }}" readonly>

<p>
    Copy link ini untuk membuka dokumen di akun/user lain.
</p>

<script>
    window.Echo.channel('document.{{ $document->id }}')
        .listen('.document.updated', (e) => {

            document.getElementById('document-content')
                .innerHTML = e.document.content;

        });
</script>