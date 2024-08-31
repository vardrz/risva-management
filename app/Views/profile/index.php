<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="w-full px-4 py-2">
    <div class="flex justify-between pb-2">
        <h1 class="font-bold text-3xl items-center">Profil & Konten Website</h1>
        <p></p>
        <div class="text-sm place-self-end">
            <ul class="flex">
                <li class="text-gray-600"><a href="<?= base_url('admin/home'); ?>" class="hover:font-semibold">Dashboard</a></li>
                <li><span class="mx-2 text-gray-400">/</span></li>
                <li class="font-medium"><span>Profil</span></li>
            </ul>
        </div>
    </div>

    <div class="container mt-4 grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="card-body relative overflow-x-auto shadow-md border">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div role="alert" class="alert alert-success relative flex items-center mb-3">
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
            <?php endif; ?>
            <form action="<?= base_url('admin/profile/save'); ?>" method="post">
                <div class="mb-5">
                    <label for="deskripsi">Deskripsi Profil</label>
                    <textarea rows="7" name="deskripsi" id="deskripsi" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['deskripsi']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"><?= $data['deskripsi']; ?></textarea>
                    <?php if (isset(session()->get('validator')['deskripsi'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['deskripsi']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="slogan">Slogan</label>
                    <input type="text" name="slogan" id="slogan" value="<?= $data['slogan']; ?>" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['slogan']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['slogan'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['slogan']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="youtube_video">Profil Youtube Video</label>
                    <input type="text" name="youtube_video" id="youtube_video" value="<?= $data['youtube_video']; ?>" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['youtube_video']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['youtube_video'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['youtube_video']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" value="<?= $data['instagram']; ?>" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['instagram']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['instagram'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['instagram']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp" id="whatsapp" value="<?= $data['whatsapp']; ?>" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['whatsapp']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"/>
                    <?php if (isset(session()->get('validator')['whatsapp'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['whatsapp']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-5">
                    <label for="alamat">Alamat</label>
                    <textarea rows="5" name="alamat" id="alamat" class="block px-2.5 pb-2.5 pt-4 mt-2 w-full resize-y text-sm text-gray-900 bg-transparent rounded-sm border appearance-none peer <?= isset(session()->get('validator')['alamat']) ? 'border-red-500' : 'border-[#B7B7B7]'; ?>"><?= $data['alamat']; ?></textarea>
                    <?php if (isset(session()->get('validator')['alamat'])) : ?>
                        <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                            <span><?= session()->get('validator')['alamat']; ?></span>
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
            <span class="font-semibold text-xl mb-5 text-center">Profil Video</span>
            <iframe class="w-full h-56" src="<?= str_replace('youtu.be', 'www.youtube.com/embed', $data['youtube_video']); ?>" title="Profil Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <hr class="my-5">

            <span class="font-semibold text-xl mb-5 text-center">Logo</span>
            <div class="flex flex-col items-center">
                <img class="w-24" src="<?= base_url('uploaded/') . $data['logo'] ?>" alt="Logo">
                <form method="post" action="<?= base_url('admin/profile/logo'); ?>" enctype="multipart/form-data" class="flex flex-col mt-10">
                    <div>
                        <span class="mb-2 pr-5">Ubah Logo</span>
                        <input type="file" name="logo"/>
                        <?php if (isset(session()->get('validator')['logo'])) : ?>
                            <div class="text-red-500 text-xs w-full h-fit flex flex-row mt-1">
                                <span><?= session()->get('validator')['logo']; ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-4 w-4 ml-auto" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="p-2 bg-indigo-800 text-white rounded-md mt-5">Simpan</button>
                </form>
            </div>

            <?php if (session()->getFlashdata('logo')) : ?>
                <div role="alert" class="alert alert-success relative flex items-center mt-3">
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
                    <span><?= session()->getFlashdata('logo'); ?></span>
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 inset-y-0 my-auto" onclick="this.parentElement.style.display='none';">✕</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>