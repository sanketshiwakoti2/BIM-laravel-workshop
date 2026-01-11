@extends('index')
@section('content')
<a href='/create'>Create new Data</a>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Datatables</h5>
        <p>Add lightweight datatables to your project with using the <a
                href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.
            Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

        <!-- Table with stripped rows -->
        <table class="table datatable">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>phone number</th>
                <th>age</th>
                <th>action</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->phone_number}}</td>
                <td>
                    <a href='/edit/{{$student->id}}'>edit</a>
                    <form action="{{ url('/student/delete/'.$student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none;border:none;color:blue;cursor:pointer;">
                            hataide
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>


@endsection