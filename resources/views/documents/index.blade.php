<h1>Daftar Dokumen</h1>

<a href="/documents/create">Buat Dokumen Baru</a>

<br><br>

@foreach ($documents as $document)

    <p>

        <strong>{{ $document->title }}</strong>

        <br>

        {{ $document->content }}

        <br>

        <a href="/documents/{{ $document->id }}/edit">
            Edit
        </a>

        <form action="/documents/{{ $document->id }}" method="POST">

            @csrf

            @method('DELETE')

            <button type="submit">
                Delete
            </button>

        </form>

    </p>

@endforeach
