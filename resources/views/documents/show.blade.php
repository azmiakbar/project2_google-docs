@vite(['resources/css/app.css', 'resources/js/app.js'])

<a href="/documents"
    style="color:blue;">
    Kembali
</a>

<br><br>

<h3>Nama Dokumen</h3>

<div style="border:1px solid gray; padding:15px;">

    {{ $document->title }}

</div>

<br>

<a href="/documents/{{ $document->id }}/edit"
    style="color:blue;">

    Edit Dokumen
</a>

<br><br>

<p>
    {{ $presenceCount }} user sedang membuka document ini
</p>

<p>
    {{ $typingUsers }} user sedang mengedit document ini
</p>

<br><br>


<h3>Isi Dokumen</h3>

<div style="border:1px solid gray; padding:20px; min-height:120px;">

    {!! $document->content !!}

</div>

<hr>

<h3>Share Link</h3>

<input
    type="text"
    value="{{ url('/documents/' . $document->id) }}"
    readonly
>