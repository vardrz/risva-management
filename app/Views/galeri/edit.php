<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="w-full px-4 py-6">
    <div class="flex justify-between pb-4">
        <h1 class="font-bold text-3xl">Form Edit Galeri</h1>
        <div class="text-sm self-end">
            <ul class="flex">
                <li class="text-gray-600"><a href="<?= base_url('admin/home'); ?>" class="hover:font-semibold">Dashboard</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="text-gray-600"><a href="<?= base_url('admin/galeri'); ?>" class="hover:font-semibold">Galeri</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="font-medium"><span>Edit</span></li>
            </ul>
        </div>
    </div>

    <?php if (session()->get('validator')) : ?>
        <div role="alert" class="alert alert-warning relative flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>Warning: Mohon Isi data dengan Benar.</span>
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 inset-y-0 my-auto" onclick="this.parentElement.style.display='none';">✕</button>
        </div>
    <?php endif; ?>

    <div class="container mt-6">
        <form action="<?= base_url('admin/galeri/update/' . $value['id_galeri']); ?>" method="post" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-6 border">
            <?= csrf_field(); ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Galeri</label>
                        <input type="text" name="judul" value="<?= $value['judul']; ?>" id="judul" class="input input-bordered w-full <?= isset(session()->get('validator')['judul']) ? 'border-red-500' : 'border-gray-300'; ?>">
                        <?php if (isset(session()->get('validator')['judul'])) : ?>
                            <span class="text-red-500 text-sm mt-1"><?= session()->get('validator')['judul']; ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="textarea textarea-bordered w-full <?= isset(session()->get('validator')['deskripsi']) ? 'border-red-500' : 'border-gray-300'; ?>"><?= $value['deskripsi']; ?></textarea>
                        <?php if (isset(session()->get('validator')['deskripsi'])) : ?>
                            <span class="text-red-500 text-sm mt-1"><?= session()->get('validator')['deskripsi']; ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="file-input file-input-bordered w-full <?= isset(session()->get('validator')['gambar']) ? 'border-red-500' : 'border-gray-300'; ?>" onchange="previewImage()">
                        <?php if (isset(session()->get('validator')['gambar'])) : ?>
                            <span class="text-red-500 text-sm mt-1"><?= session()->get('validator')['gambar']; ?></span>
                        <?php endif; ?>
                        <p class="mt-2 text-sm text-gray-500">Current Image: <?= $value['foto']; ?></p>
                    </div>
                    <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $value['foto']; ?>">
                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/galeri'); ?>" class="btn btn-secondary ml-2">Batal</a>
                    </div>
                </div>
                <!-- Preview Gambar -->
                <div class="mb-4 flex justify-center items-center">
                    <img id="image-preview" src="<?= base_url('img/' . $value['foto']); ?>" class="w-full object-scale-down max-h-96 rounded-lg" />
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        const file = document.getElementById('gambar').files[0];
        const preview = document.getElementById('image-preview');

        const reader = new FileReader();
        reader.onloadend = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>

<?= $this->endSection() ?>