<h1>Buat Dokumen</h1>

<form action="/documents" method="POST">

    @csrf

    <label>Judul Dokumen</label>
    <br>

    <input type="text" name="title">

    <br><br>

    <label>Isi Dokumen</label>
    <br>

    <textarea name="content"></textarea>

    <br><br>

    <button type="submit">Simpan</button>

</form>