<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beranda newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beranda newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Beranda query()
 */
	class Beranda extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $slug
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $foto
 * @property string $isiBlog
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereIsiBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $id_user
 * @property string $feedback
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Feedback whereUpdatedAt($value)
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $slug
 * @property string $judul
 * @property string $deskripsi
 * @property string $lokasi
 * @property string $tanggal
 * @property string $periode
 * @property string|null $foto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan wherePeriode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Gerakan whereUpdatedAt($value)
 */
	class Gerakan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $id_user
 * @property string $namaMitra
 * @property string $emailMitra
 * @property string $kontak
 * @property string $kategoriMitra
 * @property string $alamatMitra
 * @property string $medsos
 * @property string $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereAlamatMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereEmailMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereKategoriMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereKontak($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereMedsos($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereNamaMitra($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Mitra whereUpdatedAt($value)
 */
	class Mitra extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Perpustakaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Perpustakaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Perpustakaan query()
 */
	class Perpustakaan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $id_user
 * @property string $judul
 * @property string $deskripsi
 * @property string $location
 * @property string $status
 * @property string $foto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedAt($value)
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $role
 * @property string $name
 * @property string|null $avatar
 * @property string $email
 * @property string $password
 * @property string $birth
 * @property string $jenis_kel
 * @property string $profesi
 * @property string $phone
 * @property string $kota
 * @property string $kecamatan
 * @property string|null $email_verifikasi
 * @property string|null $verification_token
 * @property string|null $reset_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereJenisKel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereKecamatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProfesi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereVerificationToken($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

