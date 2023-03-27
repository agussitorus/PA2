<x-admin-layouts title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <form id="form_input">
      @csrf
      <div class="card">
          <div class="card-body">
              <div class="mb-3">
                  <label for="" class="form-label">Nama Ikan</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Ikan" value="">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Jenis Ikan</label>
                  <select name="category" class="form-select">
                      <option disabled selected>Pilih Jenis Ikan</option>                                        
                      <option value="lele">Lele</option>
                      <option value="batak">Batak</option>
                      <option value="mujahir">Mujahir</option>
                      <option value="nila">Nila</option>
                      <option value="mas">Mas</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Harga</label>
                  <input type="number" name="price" class="form-control" placeholder="Masukkan Harga" value="">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Stok</label>
                  <input type="number" name="stock" class="form-control" placeholder="Masukkan Stok" value="">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Gambar</label>
                  <input type="file" name="image" class="form-control" placeholder="Masukkan Gambar" value="">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Deskripsi</label>
                  <textarea name="description" style="height:140px;" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
              </div>
          </div>
          <div class="card-footer">
              <div class="hstack gap-2 justify-content">
                  <a class="btn btn-light" href="javascript:;" onclick="load_list(1);">Kembali</a>
                  <button type="submit" id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','','POST');" class="btn btn-primary" id="add-btn">Tambah Produk</button>
              </div>
          </div>
      </div>
  </form>
    
        

</x-admin-layouts>