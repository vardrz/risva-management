<!-- Modal Tambah -->
<dialog id="paket_tambah" class="modal">
    <div class="modal-box max-w-md">
        <form method="dialog">
            <button type="submit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold mb-3 text-center">Form Tambah</h3>
        <form action="<?= base_url('admin/paket/save'); ?>" method="post">
            <div class="mb-3">
                <div class="relative">
                    <input type="text" name="nama_paket" id="nama_paket" placeholder="<?= old('nama_paket'); ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['nama_paket']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                    <label for="nama_paket" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['nama_paket']) ? 'text-red-500' : 'text-gray-500'; ?>">Nama Paket</label>
                </div>
                <?php if (isset(session()->get('validator')['nama_paket'])) : ?>
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span><?= session()->get('validator')['nama_paket']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <div class="relative">
                    <input type="number" name="harga" id="harga" placeholder="<?= old('harga'); ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['harga']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                    <label for="harga" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['harga']) ? 'text-red-500' : 'text-gray-500'; ?>">Harga</label>
                </div>
                <?php if (isset(session()->get('validator')['harga'])) : ?>
                    <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                        <span><?= session()->get('validator')['harga']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="btn btn-sm btn-block btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</dialog>
<!-- End Modal Tambah  -->

<!-- Modal Edit -->
<?php foreach ($paket as $key => $value) : ?>
    <dialog id="paket_Edit_<?= $value['id_paket']; ?>" class="modal">
        <div class="modal-box max-w-md">
            <form method="dialog">
                <button type="submit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold mb-3 text-center">Form Edit <?= $value['nama_paket']; ?></h3>
            <form action="<?= base_url('admin/paket/update/' . $value['id_paket']); ?>" method="post">
                <div class="mb-3">
                    <div class="relative">
                        <input type="text" name="edit_nama_paket" id="edit_nama_paket" value="<?= $value['nama_paket']; ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['edit_nama_paket']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="edit_nama_paket" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['edit_nama_paket']) ? 'text-red-500' : 'text-gray-500'; ?>">Nama Paket</label>
                    </div>
                    <?php if (isset(session()->get('validator')['edit_nama_paket'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['edit_nama_paket']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <div class="relative">
                        <input type="number" name="edit_harga" id="edit_harga" value="<?= $value['harga']; ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['edit_harga']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="edit_harga" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['edit_harga']) ? 'text-red-500' : 'text-gray-500'; ?>">edit_Harga</label>
                    </div>
                    <?php if (isset(session()->get('validator')['edit_harga'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['edit_harga']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="btn btn-sm btn-block btn-primary">Update</button>
                </div>
            </form>
        </div>
    </dialog>
<?php endforeach; ?>
<!-- End Modal Edit  -->