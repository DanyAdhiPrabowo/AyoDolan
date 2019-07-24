
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
                <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Input Data <?=$section ?></h1>
              </div>
              <form class="user" method="POST" enctype="multipart/form-data" action="<?=base_url('guide/save')?>">
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">NIK</label>
                  <input type="text" class="form-control" placeholder="NIK..." name="nik" onkeypress="return inputAngka(event)" value="<?=set_value('nik') ?>">
                  <?=form_error('nik',"<small class='text-danger'>",'</small>') ?>
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Email</label>
                  <input type="text" class="form-control" placeholder="Email..." name="email" value="<?=set_value('email') ?>">
                  <?=form_error('email',"<small class='text-danger'>",'</small>') ?>
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Your Name..." name="name" value="<?=set_value('name') ?>">
                  <?=form_error('name',"<small class='text-danger'>",'</small>') ?>
                </div>
                <div class="form-group row">
                  <label class="text-dark control-label col-md-3 font-weight-bold">Gender</label>
                  <div class="col-md-12 ml-3">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="1" <?=set_radio('gender', 1, true) ?> >Male
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="0" <?=set_radio('gender', 0) ?> >Female
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Age</label>
                  <input type="text" class="form-control" placeholder="Enter Your Age..." name="age" onkeypress="return inputAngka(event)" value="<?=set_value('age') ?>">
                  <?=form_error('age', "<small class='text-danger'>",'</small>') ?>
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">No HP</label>
                    <input type="text" class="form-control" placeholder="08xxxxxxx.." name="hp" onkeypress="return inputAngka(event)" value="<?=set_value('hp') ?>">
                     <?=form_error('hp',"<small class='text-danger'>",'</small>') ?> 
                </div>
                <div class="form-group mb-3">
                  <label class="text-dark font-weight-bold">Foto</label>
                  <input type="file" class="form-control-file" name="foto" >
                </div>
                <hr>
                <div class="d-flex">
                <button type="submit" class="btn btn-primary mr-3">Simpan</button>
              </form>        
              <a href="<?=base_url('guide') ?>" class="btn btn-secondary">Kembali</a>
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
