
<!-- <div class="container"> -->
  <div class="mb-5">
  <?=$this->session->flashdata('flash') ?>
    <div class="card o-hidden border-0 shadow-lg">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Edit Data <?=$section ?></h1>
              </div>
              <form class="user" method="POST" action="<?=base_url('paket/update/'.$id)?>">
                <?php foreach ($show as $s){
                ?>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Nama Paket</label>
                  <input type="text" class="form-control" placeholder="Destination..." name="name" value="<?=set_value('name', $s->nama_paket) ?>">
                  <?=form_error('name',"<small class='text-danger'>",'</small>') ?>
                </div>
                <div class="form-group row pb-3">
                  <div class="col-sm-12">
                    <label class="text-dark font-weight-bold">Price</label>
                    <input type="text" class="form-control" placeholder="Price.." name="price" onkeypress="return inputAngka(event)" value="<?=set_value('price', $s->price) ?>">
                     <?=form_error('price',"<small class='text-danger'>",'</small>') ?> 
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Description</label>
                  <textarea type="text" class="form-control" placeholder="Description..." name="description" rows="7"><?=set_value('description', $s->description_paket)?></textarea>
                  <?=form_error('description',"<small class='text-danger'>",'</small>') ?>
                </div>
                <hr>
                <div class="d-flex">
                <button type="submit" class="btn btn-primary mr-3">Simpan</button>
              <?php } ?>
              </form>        
              <a href="<?=base_url('paket') ?>" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- </div> -->

<script>
  function inputAngka(evt){
      var charCode = (evt.charCode);

      if(charCode>31 && (charCode<48 || charCode>57) && charCode!=45)
      {
        return false;
      }
      else
      {
        return true;
      }
  }
</script>
