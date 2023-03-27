<x-admin-layouts title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>

    <form class="needs-validation" method="post" action="{{ route('admin.store') }}">
    @csrf
      <div class="card">
          <div class="card-body">
              <div class="mb-3">
                  <label for="Nama Product" class="form-label">Nama Product</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Ikan" >
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
                  <label for="form-label" class="form-label">Harga  :</label>
                  <input type="number" name="price" class="form-control" placeholder="Masukkan Harga" >
              </div>
                @error('harga')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

              <div class="mb-3">
                  <label for="stok" class="form-label">Stok</label>
                  <input type="number" name="stock" class="form-control" placeholder="Masukkan Stok" >
              </div>
              <div class="mb-3">
                  <label for="image" class="form-label">Gambar</label>
                  <input type="file" name="image" class="form-control" placeholder="Masukkan Gambar" >
              </div>
              <div class="mb-3">
                  <label for="Deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="description" style="height:140px;" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
              </div>
          </div>
          <div class="card-footer">
              <div class="hstack gap-2 justify-content">
                  <a type="button" class="btn btn-light" href="{{ route('admin.main') }}" ><i class="fas fa-times"></i> Batal</a>
                  <button type="submit" class="btn btn-primary" id="add-btn">Submit</button>
          </div>
      </div>
  {{-- </form> --}}
    
        

</x-admin-layouts>