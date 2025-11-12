<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teks')->insert([
            [
                'no_teks' => 1,
                'teks1' => 'Wah, kamu luar biasa! Nampaknya suasana hatimu benar-benar cerah. Terus jaga pola hidup sehatmu, dan luangkan waktu untuk menikmati setiap momen kebahagiaan. Ingatlah bahwa merayakan keberhasilan kecilmu bisa menjadi bahan bakar yang luar biasa untuk semangat hidupmu.',
                'teks2' => 'Sungguh luar biasa, semangat positif yang kamu miliki benar-benar menjadi pilar kekuatan di tengah-tengah tantangan depresi. Keberanianmu untuk tetap bersinar dalam kegelapan adalah inspiratif. Terus pertahankan semangat positif itu, dan nikmatilah setiap momen kebahagiaan seolah-olah itu adalah harta karun yang tak ternilai. Hidup ini memang seperti petualangan yang menarik, dan setiap langkahmu membawa kebahagiaan lebih dekat. Penting untuk selalu mengingat bahwa kamu adalah individu yang luar biasa, dan mengapresiasi diri sendiri adalah langkah penting menuju pemulihan yang lebih baik.'
            ],
            [
                'no_teks' => 2,
                'teks1' => 'Selamat, kamu sedang berada dalam keadaan emosional yang baik! Jangan lupakan untuk merayakan pencapaianmu sendiri. Mungkin ini saat yang tepat untuk merenung tentang hal-hal yang memberimu kebahagiaan dan membangun kesejahteraan emosionalmu. Jangan sungkan untuk memberi dirimu hadiah dan apresiasi.',
                'teks2' => 'Selamat, Kesejahteraan emosional yang terpancar dari dirimu adalah bukti nyata akan kekuatan batin yang dimiliki setiap orang. Banggakan dirimu atas pencapaian ini dan teruslah mengejar impian-impian kecilmu. Ingatlah bahwa setiap langkah kecil menuju kebahagiaan memiliki dampak besar pada kesejahteraan mental. Pertahankan semangat positif yang telah kamu kembangkan, karena langkah-langkah besar masih menanti untuk diambil, membawamu menuju perjalanan hidup yang lebih memuaskan.'
            ],
            [
                'no_teks' => 3,
                'teks1' => 'Terlihat seperti saatnya memberikan perhatian lebih pada diri sendiri. Coba refleksikan apa yang bisa menciptakan keseimbangan dalam hidupmu. Terkadang, meluangkan waktu untuk mengevaluasi rutinitas dan menemukan cara baru untuk mengatasi stres bisa menjadi langkah positif. Kamu pantas mendapatkan kesejahteraan emosional yang optimal.',
                'teks2' => 'Saatnya memberikan perhatian lebih pada dirimu sendiri, Sobat Baik! Kekuatan besar yang kamu miliki untuk menciptakan perubahan positif sangat luar biasa. Temukan cara-cara baru untuk mengatasi stres dan fokuslah pada hal-hal yang memberimu kebahagiaan sejati. Tantangan yang kamu hadapi saat ini sebenarnya adalah peluang untuk tumbuh dan berkembang. Kamu sedang membangun pondasi yang kokoh untuk kehidupan yang lebih baik, dan teruslah melangkah maju dengan penuh keyakinan, karena masa depan yang cerah menantimu.'
            ],
            [
                'no_teks' => 4,
                'teks1' => 'Aku melihat ada beberapa tanda bahwa stres sedang hadir dalam hidupmu. Cobalah berbicara dengan seseorang, baik itu teman dekat atau anggota keluarga, tentang perasaanmu. Memiliki dukungan sosial dapat membantu meredakan beban emosional. Jangan ragu untuk memberi dirimu waktu untuk merenung dan mencari solusi yang sesuai denganmu.',
                'teks2' => 'Kamu pasti bisa melewati ini, Sobat! Setiap rintangan yang kamu hadapi adalah peluang nyata untuk menguatkan dirimu sendiri. Cari dukungan dari teman atau keluarga, dan gunakan pengalaman ini sebagai batu loncatan untuk tumbuh dan berkembang. Jangan ragu untuk memberi dirimu waktu untuk merenung dan mencari solusi yang memberdayakan. Ini adalah bagian integral dari perjalananmu yang bertujuan membangun ketangguhan dan kematangan batin. Kamu memiliki potensi luar biasa untuk melampaui batasan-batasan ini.'
            ],
            [
                'no_teks' => 5,
                'teks1' => 'Terlihat kamu tengah menghadapi tekanan yang cukup besar. Pertimbangkan untuk mencari dukungan profesional atau membicarakannya dengan seseorang yang kamu percayai. Ingat, tidak ada yang perlu dihadapi sendirian, dan meminta bantuan adalah tindakan penuh keberanian. Semoga kamu segera menemukan jalan untuk melalui fase ini dengan lebih ringan.', 
                'teks2' => 'Sobat, kamu adalah pemenang sejati dalam perjuangan ini! Saatnya untuk bersinar lebih terang. Dukungan dari teman, keluarga, dan ahli kesehatan mental dapat membawa sinar ke dalam kegelapan yang kamu alami. Ingatlah bahwa kesembuhan adalah perjalanan panjang, dan setiap langkah yang kamu ambil adalah kemenangan besar yang patut dibanggakan. Kamu pantas untuk merasakan kebahagiaan yang mendalam dan penuh makna. Teruslah berjuang, karena di ujung sana ada cahaya yang menunggu untuk menyinari hari-harimu, membawa kehidupan yang lebih baik dan lebih bahagia.'
            ],
        ]);
    }
}
