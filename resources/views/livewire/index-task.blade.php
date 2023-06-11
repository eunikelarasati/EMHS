<div>
    <table class="table table-bordered mt-2">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            {{-- <th scope="col" class="text-center">Aksi</th> --}}
          </tr>
        </thead>
      <tbody>
        @foreach ($task as $idx => $data)
        <tr>
            <td>{{ $data->id }}</td> 
           <td>{{ $data->nama }}</td>
           <td>{{ $data->judul_task }}</td>
           <td>{{ $data->deskripsi_task }}</td>
          </tr> 
          @endforeach
    </tbody>
    </table>
    <div class="alert alert-succes" role="alert">
        Total Data : {{$task->count()}}
    </div>
 </div>
