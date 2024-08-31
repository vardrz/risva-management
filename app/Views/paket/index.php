<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="w-full px-4 py-2">
    <div class="flex justify-between pb-2">
        <h1 class="font-bold text-3xl items-center">Kelola Paket</h1>
        <p></p>
        <div class="text-sm place-self-end">
            <ul class="flex">
                <li class="text-gray-600"><a href="<?= base_url('admin/home'); ?>" class="hover:font-semibold">Dashboard</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="font-medium"><span>Kelola Paket</span></li>
            </ul>
        </div>
    </div>
    <?php if (session()->get('validator')) : ?>
        <div role="alert" class="alert alert-warning relative flex items-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 shrink-0 stroke-current"
                fill="none"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>Warning: Mohon Isi data dengan Benar.</span>
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 inset-y-0 my-auto" onclick="this.parentElement.style.display='none';">✕</button>
        </div>
    <?php elseif (session()->getFlashdata('pesan')) : ?>
        <div role="alert" class="alert alert-success relative flex items-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 shrink-0 stroke-current"
                fill="none"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span><?= session()->getFlashdata('pesan'); ?></span>
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 inset-y-0 my-auto" onclick="this.parentElement.style.display='none';">✕</button>
        </div>
    <?php elseif (session()->getFlashdata('hapus')) : ?>
        <div role="alert" class="alert alert-success relative flex items-center">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 shrink-0 stroke-current"
                fill="none"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span><?= session()->getFlashdata('hapus'); ?></span>
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 inset-y-0 my-auto" onclick="this.parentElement.style.display='none';">✕</button>
        </div>
    <?php endif; ?>
    <div class="container mt-4">
        <div class="flex items-center mb-4">
            <button onclick="paket_tambah.showModal()" class="flex items-center space-x-2 bg-primary text-white rounded-sm py-2 pr-3 pl-2 text-sm">
                <svg class="h-5 w-5 text-white-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="4" y="4" width="16" height="16" rx="2" />
                    <line x1="9" y1="12" x2="15" y2="12" />
                    <line x1="12" y1="9" x2="12" y2="15" />
                </svg>
                <span>
                    Tambah Paket
                </span>
            </button>
        </div>
        <div class="card-body relative overflow-x-auto shadow-md border">
            <table class="w-full text-sm text-left text-gray-500 rounded-none">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                    <tr class="border-b">
                        <th scope="col" class="px-2 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Paket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paket as $key => $value) : ?>
                        <tr class="border-b">
                            <td scope="col" class="align-top text-center px-2 py-3 font-medium whitespace-nowrap">
                                <?= $key + 1; ?>
                            </td>
                            <td scope="row" class="align-top text-center px-6 py-4 font-medium whitespace-nowrap">
                                <?= $value['nama_paket']; ?><br>
                                <button onclick="item_tambah_<?= $value['id_paket']; ?>.showModal()" class="btn btn-xs btn-info text-white">Tambah Item</button>
                            </td>
                            <td scope="row" class="align-top px-6 py-4 font-medium text-warp">
                                <?= $value['deskripsi']; ?><br>
                            </td>
                            <td scope="row" class="flex flex-col items-end py-4 font-medium whitespace-nowrap">
                                <?php foreach ($item as $key) : ?>
                                    <?php if ($key['id_paket'] == $value['id_paket']) : ?>
                                        <div class="flex items-center mb-2">
                                            <span class="mr-4"><?= $key['item']; ?></span>
                                            <div>
                                                <button onclick="item_edit_<?= $key['id_item']; ?>.showModal()" class="btn btn-sm btn-circle text-white btn-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <a href="<?= base_url('admin/item_paket/delete/' . $key['id_item']); ?>" class="btn btn-sm btn-circle text-white bg-red-500" onclick="return confirm('Apa anda yakin akan menghapus data <?= $key['item']; ?> ini ?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    <?php elseif (!$key['id_paket'] == $value['id_paket']) : ?>
                                        <span class="text-gray-400">Data Item Belum Ada</span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                            <td scope="row" class="align-top text-right px-6 py-4 font-medium whitespace-nowrap">
                                <?= 'Rp ' . number_format($value['harga'], 0, ".", ","); ?>
                            </td>
                            <td class="py-4 align-top">
                                <div class="grid grid-rows-2 gap-2">
                                    <button onclick="paket_Edit_<?= $value['id_paket']; ?>.showModal()" class="btn btn-sm text-white btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </button>
                                    <a href="<?= base_url('admin/paket/delete/' . $value['id_paket']); ?>" class="btn btn-sm text-white bg-red-500" onclick="return confirm('Apa anda yakin akan menghapus data <?= $value['nama_paket']; ?> ini ?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('paket/modal'); ?>
<?= $this->include('paket/modal_item'); ?>

<?= $this->endSection() ?>