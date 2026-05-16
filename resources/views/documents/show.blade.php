<meta http-equiv="refresh" content="5">
<a href="/documents">
    Kembali
</a>

<h1>{{ $document->title }}</h1>

<hr>

<p>
    {{ $document->content }}
</p>

<hr>

<h3>Share Link</h3>

<input type="text" value="{{ url('/documents/' . $document->id) }}" readonly>

<p>
    Copy link ini untuk membuka dokumen di akun/user lain.
</p>