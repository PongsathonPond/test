@extends('layouts.admin')
@section('content')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">ข้อมูลการจอง </h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr align="center">

                                    <th scope="col" class="sort" data-sort="name">ชื่อ</th>
                                    <th scope="col" class="sort" data-sort="status">นามสกุล</th>
                                    <th scope="col" class="sort" data-sort="status">เลขทะเบียน</th>
                                    <th scope="col" class="sort" data-sort="status">สถานะการจอง</th>

                                    <th scope="col" class="sort" data-sort="status">จัดการ</th>


                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($book as $row)
                                    <tr class="ss" align="center">

                                        <td>{{ $row->fname }}</td>
                                        <td>
                                            {{ $row->lname }}
                                        </td>
                                        <td>
                                            {{ $row->car_id }}
                                        </td>



                                        <td>
                                            @if ($row->status == 0)
                                                <span class="badge badge-pill badge-default">รอการอนุมัติ</span>
                                            @else
                                                <span class="badge badge-pill badge-success">อนุมัติเรียบร้อย</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $row->id }}">
                                                จัดการ
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ url('/addbookinguser/update/' . $row->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <div class="form-group">
                                                                    <label
                                                                        for="exampleFormControlSelect1">ตรวจสอบรายการ</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1" name="status">
                                                                        <option value="1">อนุมัติ</option>
                                                                        <option value="0">ไม่อนุมัติ</option>

                                                                    </select>



                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
