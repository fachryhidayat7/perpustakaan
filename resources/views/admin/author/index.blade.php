@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penulis</h3>
        </div>
        <a href="{{ route('admin.author.create')}} " class="btn btn-primary">Tambah Penulis</a>
        <div class="box-body">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.author.data') }}',
                columns: [
                    { data: 'id'},
                    { data: 'name'}
                ]
            });
        });
    </script>
@endpush