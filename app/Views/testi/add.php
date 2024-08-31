<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="w-full px-4 py-2">
    <div class="flex justify-between pb-2">
        <h1 class="font-bold text-3xl items-center">Tambah Testimoni</h1>
        <p></p>
        <div class="text-sm place-self-end">
            <ul class="flex">
                <li class="text-gray-600"><a href="<?= base_url('admin/home'); ?>" class="hover:font-semibold">Dashboard</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="text-gray-600"><a href="<?= base_url('admin/testi'); ?>" class="hover:font-semibold">Testimoni</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="font-medium"><span>Tambah</span></li>
            </ul>
        </div>
    </div>

    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="card-body relative overflow-x-auto shadow-md border">
            <form action="<?= base_url('admin/testi/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="pesan">Pesan</label>
                    <textarea rows="7" name="pesan" id="pesan" placeholder="Isi pesan ..." class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['pesan']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"></textarea>
                    <?php if (isset(session()->get('validator')['pesan'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['pesan']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['nama']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['nama'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['nama']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="gambar">Gambar</label>
                    <input type="file" accept="image/*" onchange="loadFile(event)" name="image" id="image" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['image']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['image'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['image']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="w-full py-3 bg-indigo-800 text-white rounded-sm">Simpan</button>
            </form>
        </div>
        <div class="card-body relative overflow-x-auto shadow-md border">
            <span class="text-xl">Preview Gambar</span>
            <img class="w-1/2" id="output"/>
        </div>
    </div>
</div>

<?= $this->endSection() ?>


<?= $this->section('content') ?>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<?= $this->endSection() ?>