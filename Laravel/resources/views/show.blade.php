<img src="{{ asset(str_replace('public', 'storage', $karya->gambar)) }}" class="card-img-top" alt="Karya">
<div class="card-body">
    <p>{{ $karya->judul }}</p>
    <p>{{ $karya->keterangan }}</p>
</div>

<a href="{{ route('karya.edit', ['karya' => $karya->id]) }}">edit</a>
<form action="{{ route('karya.destroy', ['karya' => $karya->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn icon icon-left btn-danger m-1">hapus</button>
</form>