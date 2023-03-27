<x-admin-layouts title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Daftar Menu</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <div class="card-footer">
        <div class="hstack gap-2 justify-content">
            <button type="submit" id="tombol_simpan"  class="btn btn-primary" id="add-btn">Tambah Produk</button>
        </div>
    </div>

    <div class="card-body">
        <div>
            <div class="table-responsive table-card mb-1">
                <table class="table align-middle">
                    <thead class="table-primary text-muted ">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list form-check-all bg-white">
                        {{-- @foreach($menu as $key => $item) --}}
                        <tr>
                            <td ></td>
                            <td class="text-capitalize"></td>
                            <td class="text-capitalize"></td>
                            <td class="text-capitalize"></td>
                            <td class="text-capitalize"></td>
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="javascript:;"
                                            onclick="load_detail('')"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-eye-fill fs-16"></i>
                                        </a>
                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Edit">
                                        <a href="javascript:;"
                                            onclick="load_input('{')"
                                            class="text-primary d-inline-block edit-item-btn">
                                            <i class="ri-pencil-fill fs-16"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="" data-bs-original-title="Remove">
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','');"
                                            class="text-danger d-inline-block remove-item-btn">
                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                        </a>
                                    </li>
                                </ul>
    
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-admin-layouts>

