<!-- Modal Tambah -->
<?php foreach ($paket as $key => $value) : ?>
    <dialog id="item_tambah_<?= $value['id_paket']; ?>" class="modal">
        <div class="modal-box max-w-md">
            <form method="dialog">
                <button type="submit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold mb-3 text-center">Form Tambah Item</h3>
            <form action="<?= base_url('admin/item_paket/save'); ?>" method="post">
                <div class="mb-3">
                    <div class="relative">
                        <input type="text" name="nama_item" id="nama_item" placeholder="<?= old('nama_item'); ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['nama_item']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="nama_item" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['nama_item']) ? 'text-red-500' : 'text-gray-500'; ?>">Nama Item</label>
                    </div>
                    <?php if (isset(session()->get('validator')['nama_item'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['nama_item']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <div class="relative">
                        <input readonly type="number" name="id_paket" id="id_paket" value="<?= $value['id_paket']; ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['id_paket']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="id_paket" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['id_paket']) ? 'text-red-500' : 'text-gray-500'; ?>">id_paket</label>
                    </div>
                    <?php if (isset(session()->get('validator')['id_paket'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['id_paket']; ?></span>
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
<?php endforeach; ?>
<?php foreach ($item as $key => $value) : ?>
    <!-- Modal Edit -->
    <dialog id="item_edit_<?= $value['id_item']; ?>" class="modal">
        <div class="modal-box max-w-md">
            <form method="dialog">
                <button type="submit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold mb-3 text-center">Form Edit</h3>
            <form action="<?= base_url('admin/item_paket/update/' . $value['id_paket']); ?>" method="post">
                <div class="mb-3">
                    <div class="relative">
                        <input type="text" name="edit_item" id="edit_item" value="<?= $value['item']; ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['edit_item']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="edit_item" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['edit_item']) ? 'text-red-500' : 'text-gray-500'; ?>">Nama Item</label>
                    </div>
                    <?php if (isset(session()->get('validator')['edit_item'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['edit_item']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <div class="relative">
                        <input readonly type="number" name="edit_id_paket" id="edit_id_paket" value="<?= $value['id_paket']; ?>" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['edit_id_paket']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>">
                        <label for="edit_id_paket" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:bg-white peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 <?= isset(session()->get('validator')['edit_id_paket']) ? 'text-red-500' : 'text-gray-500'; ?>">edit_id_paket</label>
                    </div>
                    <?php if (isset(session()->get('validator')['edit_id_paket'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['edit_id_paket']; ?></span>
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