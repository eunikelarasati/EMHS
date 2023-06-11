<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Nama</label>
            <input wire:model="nama" type="text" name="" id="" class="form-control" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul_task" type="text" name="" id="" class="form-control" placeholder="Masukan Judul">
        </div>

        <div class="form-group">
            <textarea wire:model="deskripsi_task" name="" id="" cols="30" rows="10" class="form-control" placeholder="Masukan Deskripsi"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
</div>
