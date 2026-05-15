<h1>Edit Dokumen</h1>

<form action="/documents/{{ $document->id }}" method="POST">

    @csrf

    @method('PUT')

    <label>Judul Dokumen</label>
    <br>

    <input type="text" name="title" value="{{ $document->title }}">

    <br><br>

    <label>Isi Dokumen</label>
    <br>

    <textarea name="content">{{ $document->content }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>