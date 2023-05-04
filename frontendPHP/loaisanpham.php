<?php
require "../inc/header.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="font-size: 30px;">Loại sản phẩm</h1>
            <ol class="breadcrumb mb-4" style="font-size: 14px; background: #f4f3f6;">
                <li class="breadcrumb-item active">Quản Lý Sản Phẩm</li>
            </ol>
            <div class="row" style=" margin-right: -20px;">
                <div style="margin: 20px 0px; display: flex; justify-content: right; margin-right: -20px;">
                    <button style="width:80px;" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#them">
                        Thêm
                    </button>
                </div>
            </div>
            <div class="row">
                <table id="sanpham" class="display table table-hover" style="width:120%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Loại Sản Phẩm</th>                       
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tr>
                        <td>01</td>
                        <td>SamSua</td>
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#sua">Sửa</button>
                        <td>
                        <td><button type="button" class="btn btn-info">Xóa</button>
                        <td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>SamSua</td>
                        
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#sua">Sửa</button>
                        <td>
                        <td><button type="button" class="btn btn-info">Xóa</button>
                        <td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>SamSua</td>
                        
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#sua">Sửa</button>
                        <td>
                        <td><button type="button" class="btn btn-info">Xóa</button>
                        <td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>SamSua</td>
                        
                        <td><button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#sua">Sửa</button>
                        <td>
                        <td><button type="button" class="btn btn-info">Xóa</button>
                        <td>
                    </tr>
                    <tbody>
                    </tbody>
                </table>
                <div class="modal fade bd-example-modal-lg" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm Sản Phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                    
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInputgit1" class="form-label">Tên Loại    Sản
                                                Phẩm</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                    </div>
                                  
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-lg" id="sua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm Loại Sản Phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tên Loại Sản
                                                Phẩm</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                    </div>
                                 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </main>
    <div>

        <?php
            require "../inc/footer.php";
            ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script src="js/editor.js"></script>

<script>
    $(document).ready(function () {
         $('#sanpham').DataTable({
            scrollX: true,
            "lengthChange": false,
            "pagingType": "full_numbers",
            "lengthMenu": [10, 15, 20, 25],
            "loadingRecords": "Loading...",
            "infoEmpty": "No entries to show",
            "info": false,
            "infoFiltered": " - filtered from _MAX_ records",
            searchPanes: {
                viewTotal: false
            },
            "search": {

            },
            dom: 'Plfrtip',
            language: {
                "search": "Tìm Kiếm:",
                "zeroRecords": "Không có Dữ Liệu",
                "emptyTable": "Không có hóa đơn nào cần phê duyệt",
                paginate: {
                    previous: '<',
                    next: '>',
                    "loadingRecords": "Loading...",
                    "first": "<<",
                    "last": ">>",
                    "emptyTable": "Không có dữ liệu trong table",
                    "search": "Tìm kiếm"

                }
            }
        });
        $("#txtEditor").Editor();
        $("#txtadd").Editor();

    });</script>

</body>

</html>