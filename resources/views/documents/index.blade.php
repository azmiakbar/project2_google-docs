<h1>Daftar Dokumen</h1>

<form method="POST" action="{{ route('logout') }}">

    @csrf

    <button type="submit">
        Logout
    </button>

</form>

<br>

<a href="/documents/create">
    Buat Dokumen Baru
</a>

<br><br>

@foreach ($documents as $document)

    <div style="border:1px solid gray; padding:15px; margin-bottom:15px;">

        <h3>
            {{ $document->title }}
        </h3>

        <p>
            {!! Str::limit(strip_tags($document->content), 100) !!}
        </p>

        <a href="/documents/{{ $document->id }}">
            Open
        </a>

        |

        <a href="/documents/{{ $document->id }}/edit">
            Edit
        </a>

        |

        <form action="/documents/{{ $document->id }}" method="POST" style="display:inline;">

            @csrf

            @method('DELETE')

            <button type="submit">
                Delete
            </button>

        </form>

    </div>

@endforeach