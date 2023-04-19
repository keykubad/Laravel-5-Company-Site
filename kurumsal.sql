-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 11, 2016 at 12:15 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurumsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `duyurular`
--

CREATE TABLE `duyurular` (
  `id` int(10) UNSIGNED NOT NULL,
  `duyurudil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duyurubaslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duyuruicerik` text COLLATE utf8_unicode_ci NOT NULL,
  `duyurukeyw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duyurudesc` text COLLATE utf8_unicode_ci NOT NULL,
  `duyuruslug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duyurular`
--

INSERT INTO `duyurular` (`id`, `duyurudil`, `duyurubaslik`, `duyuruicerik`, `duyurukeyw`, `duyurudesc`, `duyuruslug`, `anasayfa`, `created_at`, `updated_at`) VALUES
(1, 'tr', 'Sitenize Özel Duyuru', '<p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.</p>\r\n', 'Duyuru,lorem duyuru,lorem ipsum', 'Duyuru yazısı', 'sitenize-ozel-duyuru', 1, '2016-03-24 21:17:13', '2016-03-24 21:17:38'),
(2, 'tr', 'Deneme Başlık', '<p>Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.Lorem Ipsum pasajlarının bir&ccedil;ok &ccedil;eşitlemesi vardır. Ancak bunların b&uuml;y&uuml;k bir &ccedil;oğunluğu mizah katılarak veya rastgele s&ouml;zc&uuml;kler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı s&ouml;zc&uuml;kler gizlenmediğinden emin olmanız gerekir. İnternet&#39;teki t&uuml;m Lorem Ipsum &uuml;rete&ccedil;leri &ouml;nceden belirlenmiş metin bloklarını yineler. Bu da, bu &uuml;reteci İnternet &uuml;zerindeki ger&ccedil;ek Lorem Ipsum &uuml;reteci yapar. Bu &uuml;rete&ccedil;, 200&#39;den fazla Latince s&ouml;zc&uuml;k ve onlara ait c&uuml;mle yapılarını i&ccedil;eren bir s&ouml;zl&uuml;k kullanır. Bu nedenle, &uuml;retilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan s&ouml;zc&uuml;klerden uzaktır.</p>\r\n', 'ddsd,sdsdds,sdssd', 'Duyuru yeni', 'deneme-baslik', 1, '2016-03-24 21:28:39', '2016-03-24 21:29:13'),
(3, 'en', 'Example Anons', '<p>We all want to protect our planet, but we&#39;re mostly too busy or too lazy to put up big change that would improve our lifestyle and save the environment.These are 7 simple habits to implement in your&nbsp;everyday&nbsp;life which will make a difference.&nbsp;There is nothing new here but if you follow at least some of these tips, you can be proud of yourself participating in the protection of the environment.</p>\r\n', 'anons', 'new anons', 'example-anons', 1, '2016-03-27 14:17:42', '2016-03-27 14:28:55'),
(4, 'en', 'Example Anons New', '<p>We all want to protect our planet, but we&#39;re mostly too busy or too lazy to put up big change that would improve our lifestyle and save the environment.These are 7 simple habits to implement in your&nbsp;everyday&nbsp;life which will make a difference.&nbsp;There is nothing new here but if you follow at least some of these tips, you can be proud of yourself participating in the protection of the environment.</p>\r\n', 'anons', 'new', 'example-anons-new', 0, '2016-03-27 14:23:21', '2016-03-27 14:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `ekstraalan`
--

CREATE TABLE `ekstraalan` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `alan` text COLLATE utf8_unicode_ci NOT NULL,
  `dil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ekstraalan`
--

INSERT INTO `ekstraalan` (`id`, `adi`, `durum`, `alan`, `dil`, `created_at`, `updated_at`) VALUES
(1, 'Sipariş Hükümleri [Sipariş Sayfası Form]', 1, '<h2><strong>Sipariş H&uuml;k&uuml;mleri</strong></h2>\r\n\r\n<p>&quot;Alıcı&quot; Satıcının S&ouml;zleşme tahtında &Uuml;r&uuml;n veya Hizmet sağladığı kurum anlamına gelir.</p>\r\n\r\n<p>&quot;S&ouml;zleşme&quot;, &Uuml;r&uuml;n veya Hizmet satışına ilişkin olarak işbu H&uuml;k&uuml;m ve Şartlar ile birlikte, Satıcının nihai fiyat teklifi, mutabık kalınan iş kapsam(lar)ı ve Satıcının sipariş teyidiyle birlikte, her iki tarafın imzaladığı s&ouml;zleşme veya Alıcı tarafından imzalanmış ve Satıcı tarafından yazılı olarak kabul edilmiş olan satış siparişi anlamına gelir. Herhangi bir ihtilaf durumunda işbu H&uuml;k&uuml;m ve Şartlar, S&ouml;zleşmeye d&acirc;hil olan diğer belgelerer g&ouml;re &ouml;ncelikli olarak uygulanır.</p>\r\n\r\n<p>&quot;S&ouml;zleşme Fiyatı&quot; S&ouml;zleşmeuyarınca yapılan değişiklikler (eğer varsa) d&acirc;hil olmak &uuml;zere &Uuml;r&uuml;n ve Hizmet satışına ilişkin olarak S&ouml;zleşmede anlaşılan fiyat anlamına gelir.</p>\r\n\r\n<p>&quot;Hile&quot; her iki durumda da bir zarara veya hasara sebebiyet verme amacı ile kasti ve hukuka aykırı bir fiil veya kasti ve hukuka aykırı bir fiile yol a&ccedil;an davranış anlamına gelmektedir.</p>\r\n\r\n<p>&quot;Ağır kusur&quot;, bilinen veya ger&ccedil;ekleşmesi a&ccedil;ık olan ve sonrasında bir zararın meydana geleceği olduk&ccedil;a muhtemel olan ve &ouml;nemli bir riski g&ouml;z ardı eden makul olmayan nitelikteki bir fiildir.</p>\r\n\r\n<p>Zararlı Malzemeler&quot;, Amerika Birleşik Devletleri&rsquo;nin (&quot;A.B.D.&quot;) veya Tesisin bulunduğu &uuml;lkenin herhangi ulusal, eyalet, il&ccedil;e veya yerel kanun, kural, kararname, talimat, y&ouml;netmelik veya diğer yasal zorunluluk tahtında d&uuml;zenlenen, listelenen veya denetlenen herhangi zehirli veya zararlı madde, zararlı malzeme, tehlikeli veya zararlı atık, tehlikeli mallar, radyoaktif malzeme, petrol veya petrol-kaynaklı &uuml;r&uuml;nler veya yan &uuml;r&uuml;nler, ve herhangi diğer kimyasal, madde, malzeme veya salım anlamına gelir.</p>\r\n\r\n<p>&quot;M&uuml;flis/Batık&quot;, bir tarafın iflas etmiş olduğu, alacaklıları lehine temlikte bulunduğu, kendisi veya herhangi varlıkları i&ccedil;in bir kayyum veya vekil tayin edildiği, veya herhangi iflas, hitam veya tasfiye kanunları tahtında işlem başlatmış veya kendisi aleyhine işlem başlatılmış olduğu anlamına gelir.</p>\r\n\r\n<p>&quot;&Uuml;r&uuml;nler&quot; Satıcının S&ouml;zleşme tahtında Alıcıya tedarik etmeyi kabul ettiği donanım, par&ccedil;alar, malzemeler, gere&ccedil;ler, yazılım ve diğer mallar anlamına gelir.</p>\r\n\r\n<p>&quot;Satıcı&quot;, S&ouml;zleşme tahtında &Uuml;r&uuml;nleri sağlayan veya Hizmetleri icra eden kurum anlamına gelir.</p>\r\n\r\n<p>&quot;Hizmetler&quot;, S&ouml;zleşme tahtında Satıcının Alıcı i&ccedil;in ifa etmeyi kabul ettiği hizmetler anlamına gelir.</p>\r\n\r\n<p>&quot;Tesis&quot; Satıcının Hizmetleri ifa ettiği tesisleri d&acirc;hil olmamak &uuml;zere, &Uuml;r&uuml;nlerin kullanıldığı veya Hizmetlerin ifa edildiği tesisler anlamına gelir.</p>\r\n\r\n<p>&quot;H&uuml;k&uuml;m ve Şartlar&quot;, Madde 18&rsquo;e binaen herhangi ilaveler d&acirc;hil olmak &uuml;zere, Satıcının nihai fiyat teklifinde hususiyetle belirtilen veya Satıcı tarafından yazılı olarak hususiyetle kabul edilen herhangi tadilat veya ek h&uuml;k&uuml;mlerle birlikte, işbu &quot;&Uuml;r&uuml;n ve Hizmet Satışı H&uuml;k&uuml;m ve Şartları&quot; anlamına gelir.</p>\r\n', 'tr', '2016-02-16 20:49:31', '2016-02-21 22:04:19'),
(2, 'Anasayfa Tanıtım', 1, '<p><span style="color:#F0FFF0">Tanıtım yazınızı bu alana y&ouml;netim panelinde ekstra alanlardan ekleyebilirsiniz.</span></p>\r\n', 'tr', '2016-03-27 11:41:39', '2016-04-19 19:53:28'),
(3, 'Müşteri Yorumları', 1, '<p>Ut a augue tempor, maximus ex a, varius mauris. Proin eget nisi a dolor tempor hendrerit. Aenean faucibus, sapien eu ornare lobortis, libero augue bibendum lacus, vel auctor arcu dolor sed felis. Vivamus finibus ultrices ex, nec hendrerit justo porta eu. Nunc a sem nunc dolor sit amet.</p>\r\n\r\n<p><strong>Ali Veli</strong></p>\r\n\r\n<p>-----</p>\r\n\r\n<p>Mauris orci arcu, porttitor nec mi id, eleifend pretium tellus. Maecenas pulvinar, odio non ultrices fermentum felis.</p>\r\n\r\n<p><strong>Naber Abi</strong></p>\r\n', 'tr', '2016-04-19 20:46:16', '2016-04-19 20:56:25'),
(4, 'Orta Kısım Ek Alan', 1, '<p><strong>Etmek, edilmek, eylemek, olmak, olunmak yar&shy;dımcı fiilleriyle kurulan birleşik fiiller, ilk kelimesinde herhangi bir ses d&uuml;şmesi veya t&uuml;remesine uğramazsa ayrı yazılır: alt etmek, arz etmek, azat etmek, dans etmek, el etmek, g&ouml;&ccedil; etmek, ilan etmek, kabul etmek, kul etmek, kul olmak, not etmek, oyun etmek, s&ouml;z etmek, terk etmek, var ol&shy;mak, yok etmek, yok olmak vb.</strong></p>\r\n\r\n<p>2. Birleşme sırasında kelimelerinden hi&ccedil;biri veya ikinci kelimesi anlam değişikliğine uğ&shy;ramayan birleşik kelimeler ayrı yazılır.</p>\r\n\r\n<p>a. Hayvan t&uuml;rlerinden birinin adıyla kurulanlar:</p>\r\n', 'tr', '2016-04-24 19:22:55', '2016-04-24 19:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `galerikatid` int(11) NOT NULL,
  `galeribaslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `galerislug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `galerietiket` text COLLATE utf8_unicode_ci NOT NULL,
  `galeridesc` text COLLATE utf8_unicode_ci NOT NULL,
  `galeriicerik` text COLLATE utf8_unicode_ci NOT NULL,
  `galeriresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `galeridil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `galerikatid`, `galeribaslik`, `galerislug`, `galerietiket`, `galeridesc`, `galeriicerik`, `galeriresim`, `galeridil`, `anasayfa`, `created_at`, `updated_at`) VALUES
(1, 6, 'Kurum resimleri', 'kurum-resimleri', 'galeri,kurum resimleri,etiket', 'Galeri resmi1', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'indir-1jpgsygbi.jpg', 'tr', 1, '2016-03-24 21:50:03', '2016-03-24 21:59:00'),
(2, 6, 'Kurum resimleri', 'kurum-resimleri', 'galeri resim,2 iki', 'resim,galeriş', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'indir-2jpgr5upl.jpg', 'tr', 1, '2016-03-24 21:58:08', '2016-03-24 21:58:08'),
(3, 13, 'İç Mimari', 'ic-mimari', 'iç mimari', 'iç mimari', '<p>İ&ccedil; Mimar resimleri</p>\r\n\r\n<p>İ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleriİ&ccedil; Mimar resimleri</p>\r\n', 'indirjpgyv7cn.jpg', 'tr', 1, '2016-03-26 21:15:25', '2016-03-26 21:15:25'),
(4, 13, 'Yatak Takımı', 'yatak-takimi', 'Yatak odası', 'Yatak odası', '<p><strong>Yatak odası</strong>&nbsp;takımları mı aramıştınız? Birbirinden g&uuml;zel ve modern&nbsp;<strong>yatak odası</strong>&nbsp;takımları ve mobilya modelleri uygun fiyatlarla Vivense&#39;de!<strong>Yatak odası</strong>&nbsp;takımları mı aramıştınız? Birbirinden g&uuml;zel ve modern&nbsp;<strong>yatak odası</strong>&nbsp;takımları ve mobilya modelleri uygun fiyatlarla Vivense&#39;de!<strong>Yatak odası</strong>&nbsp;takımları mı aramıştınız? Birbirinden g&uuml;zel ve modern&nbsp;<strong>yatak odası</strong>&nbsp;takımları ve mobilya modelleri uygun fiyatlarla Vivense&#39;de!<strong>Yatak odası</strong>&nbsp;takımları mı aramıştınız? Birbirinden g&uuml;zel ve modern&nbsp;<strong>yatak odası</strong>&nbsp;takımları ve mobilya modelleri uygun fiyatlarla Vivense&#39;de!<strong>Yatak odası</strong>&nbsp;takımları mı aramıştınız? Birbirinden g&uuml;zel ve modern&nbsp;<strong>yatak odası</strong>&nbsp;takımları ve mobilya modelleri uygun fiyatlarla Vivense&#39;de!</p>\r\n', 'bir-ic-mekan-tasarim-modeli-trinity-bellwoods-town-homes-8jpgjskzs.jpg', 'tr', 1, '2016-03-27 11:24:40', '2016-03-27 11:24:40'),
(5, 18, ' Interior architecture', 'interior-architecture', ' Interior architecture', ' Interior architecture', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'bir-ic-mekan-tasarim-modeli-trinity-bellwoods-town-homes-8jpgjskzsjpg7ucha.jpg', 'en', 1, '2016-03-27 15:30:31', '2016-03-27 15:30:31'),
(6, 18, ' Home Decor', 'home-decor', ' Home Decor', ' Home Decor', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'indir-3jpg5cxsgjpg4yv6d.jpg', 'en', 1, '2016-03-27 15:33:32', '2016-03-27 15:33:32'),
(7, 18, ' Design Wonders', 'design-wonders', ' Design Wonders', ' Design Wonders', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'indir-2jpgr5upljpgcgtqb.jpg', 'en', 1, '2016-03-27 15:37:11', '2016-03-27 15:37:11'),
(8, 18, 'New Patterns', 'new-patterns', 'New Patterns', 'New Patterns', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'indirjpgyv7cnjpgmsoor.jpg', 'en', 1, '2016-03-27 15:41:21', '2016-03-27 15:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `galeriresim`
--

CREATE TABLE `galeriresim` (
  `id` int(10) UNSIGNED NOT NULL,
  `galeriid` int(11) NOT NULL,
  `galeriresimler` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeriresim`
--

INSERT INTO `galeriresim` (`id`, `galeriid`, `galeriresimler`, `created_at`, `updated_at`) VALUES
(1, 2, 'indir-3jpg5cxsg.jpg', '2016-03-24 22:01:16', '2016-03-24 22:01:16'),
(2, 2, 'zedoor-resim-galerisijpg8qzcv.jpg', '2016-03-24 22:01:16', '2016-03-24 22:01:16'),
(3, 2, 'indirjpgefhs9.jpg', '2016-03-24 22:01:16', '2016-03-24 22:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `genelayar`
--

CREATE TABLE `genelayar` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitelogo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitesosyal` text COLLATE utf8_unicode_ci NOT NULL,
  `siteanaliz` text COLLATE utf8_unicode_ci NOT NULL,
  `sitegooglemap` text COLLATE utf8_unicode_ci NOT NULL,
  `mailhost` text COLLATE utf8_unicode_ci NOT NULL,
  `mailkullanici` text COLLATE utf8_unicode_ci NOT NULL,
  `mailsifre` text COLLATE utf8_unicode_ci NOT NULL,
  `sifretip` text COLLATE utf8_unicode_ci NOT NULL,
  `driver` text COLLATE utf8_unicode_ci NOT NULL,
  `port` text COLLATE utf8_unicode_ci NOT NULL,
  `kime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baslik` text COLLATE utf8_unicode_ci NOT NULL,
  `cachedurum` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genelayar`
--

INSERT INTO `genelayar` (`id`, `sitelogo`, `sitesosyal`, `siteanaliz`, `sitegooglemap`, `mailhost`, `mailkullanici`, `mailsifre`, `sifretip`, `driver`, `port`, `kime`, `baslik`, `cachedurum`, `created_at`, `updated_at`) VALUES
(1, 'logo-11pngsq52zjpgbsclapngirrnepnggid0r.png', 'http://facebook.com\r\nhttp://twitter.com\r\nhttp://google.com\r\nhttp://instagram.com', 'kod', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d50165.13444533219!2d26.797345!3d38.2024458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbf2fecabddac9%3A0xa205e930271eb8c8!2sSeferihisar%2C+35460+Seferihisar%2F%C4%B0zmir!5e0!3m2!1str!2str!4v1453054922929" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'mail.keykubad.com', 'info@keykubad.com', 'turkiye35', '', 'smtp', '587', 'gurkan.metabilisim@gmail.com', 'Mesajınız var!', 0, '0000-00-00 00:00:00', '2016-04-30 14:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `haberler`
--

CREATE TABLE `haberler` (
  `id` int(10) UNSIGNED NOT NULL,
  `haberslug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haberdurum` int(11) NOT NULL,
  `haberdil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haberbaslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `habericerik` text COLLATE utf8_unicode_ci NOT NULL,
  `haberdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `haberkeyw` text COLLATE utf8_unicode_ci NOT NULL,
  `haberresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `haberler`
--

INSERT INTO `haberler` (`id`, `haberslug`, `haberdurum`, `haberdil`, `haberbaslik`, `habericerik`, `haberdesc`, `haberkeyw`, `haberresim`, `anasayfa`, `created_at`, `updated_at`) VALUES
(1, 'lorem-ipsum-nedir', 1, 'tr', 'Lorem İpsum Nedir?', '<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n', 'Lorem ipsum haberi', 'lorem ipsum,haber,nedir?', 'indirjpgukiav.jpg', 1, '2016-03-24 21:14:18', '2016-03-24 21:14:18'),
(2, 'nereden-gelir', 0, 'tr', 'Nereden Gelir?', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n', 'kurum haber', 'galeri,haber,resim,laravel,kurumsal,site', 'widget-bg-eveningjpgxsrldjpgzfmlc.jpg', 1, '2016-03-24 22:03:25', '2016-03-27 19:08:11'),
(3, 'neden-kullanimi-yaygin', 1, 'tr', 'Neden kullanımı yaygın?', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'neden,yaygın', 'neden yaygın,kullanım', 'imagesjpgcastk.jpg', 1, '2016-03-24 22:05:05', '2016-03-24 22:05:05'),
(4, 'alfa-romeo-yeni-model-2016', 1, 'tr', 'Alfa Romeo Yeni Model 2016', '<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n', 'alfa romeo', 'alfa romeo', 'imagesjpgv7jvz.jpg', 1, '2016-03-26 21:04:08', '2016-03-26 21:04:08'),
(5, 'learn-english-gramar', 0, 'en', 'Learn English Gramar', '<p>Greeting means welcoming someone with particular words or a particular action.</p>\r\n\r\n<p>When meeting people formally for the first time, we greet by shaking hands and saying &quot;How do you do?&quot; or &quot;Pleased to meet you.&quot;</p>\r\n\r\n<p>&quot;How do you do?&quot; isn&#39;t really a question, it just means &quot;Hello&quot;.</p>\r\n\r\n<p>When young people meet informally they sometimes greet and say &quot;Give me five!&quot; and slap their hands together (high five).</p>\r\n\r\n<p>Generally we do not greet by shaking hands with people we know well. We greet by just saying &#39;hi&#39; or &#39;hello&#39;</p>\r\n\r\n<p>Here are some expressions you can use to greet people.</p>\r\n', 'learn english', 'learni,english', 'indirjpgukiavjpgd63we.jpg', 1, '2016-03-27 13:23:56', '2016-03-27 13:24:05'),
(6, 'punctuation-rules', 1, 'en', 'Punctuation rules', '<p>Punctuation marks are also used to avoid ambiguity. For example, &quot;woman, without her man, is nothing&quot; has a different meaning from &quot;woman: without her, man is nothing&quot;This is a summary of punctuation rules.Read the punctuation rules and study the examples given.Punctuation marks are also used to avoid ambiguity. For example, &quot;woman, without her man, is nothing&quot; has a different meaning from &quot;woman: without her, man is nothing&quot;This is a summary of punctuation rules.Read the punctuation rules and study the examples given.Punctuation marks are also used to avoid ambiguity. For example, &quot;woman, without her man, is nothing&quot; has a different meaning from &quot;woman: without her, man is nothing&quot;This is a summary of punctuation rules.Read the punctuation rules and study the examples given.</p>\r\n\r\n<p>Punctuation marks are also used to avoid ambiguity. For example, &quot;woman, without her man, is nothing&quot; has a different meaning from &quot;woman: without her, man is nothing&quot;This is a summary of punctuation rules.Read the punctuation rules and study the examples given.</p>\r\n', 'news new', 'news new', 'widget-bg-morningjpgaabaxjpga67dw.jpg', 1, '2016-03-27 14:30:33', '2016-03-27 14:30:33'),
(7, 'parting-phrases', 0, 'en', 'Parting phrases', '<p>There are different expressions or phrases to say goodbye. These parting phrases depend on situations and the people involved, their social status and personal relationship.There are different expressions or phrases to say goodbye. These parting phrases depend on situations and the people involved, their social status and personal relationship.There are different expressions or phrases to say goodbye. These parting phrases depend on situations and the people involved, their social status and personal relationship.</p>\r\n', 'Parting phrases', 'Parting phrases', 'imagesjpgcastkjpgsmrgs.jpg', 1, '2016-03-27 14:32:10', '2016-03-27 14:32:42'),
(8, 'daily-listening-lesson', 1, 'en', 'Daily listening lesson', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'Daily listening lesson', 'Daily listening lesson', 'imagesjpgcastkjpgsmrgsjpg9puqf.jpg', 1, '2016-03-27 14:33:49', '2016-03-27 14:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(10) UNSIGNED NOT NULL,
  `kontrol` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `kontrol`, `email`, `adsoyad`, `baslik`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 0, 'gurkan.metabilisim@gmail.com', 'Gurkan Ersan', 'Test mesajı', 'Test mesajıdır deneme yapıyoruz.', '2016-03-27 17:23:38', '2016-03-27 17:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `mailler`
--

CREATE TABLE `mailler` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_06_205915_create_users_table', 1),
('2015_04_12_184656_create_siteayar_table', 1),
('2015_04_19_124837_create_sayfalar_table', 1),
('2015_04_26_162644_create_genelayar_table', 1),
('2015_04_29_194829_create_haberler_table', 1),
('2015_05_03_175945_create_referans_table', 1),
('2015_05_10_185501_create_video_table', 1),
('2015_05_17_145500_create_duyurular_table', 1),
('2015_05_17_203612_create_iletisim_table', 1),
('2015_05_19_190734_create_slider_table', 1),
('2015_05_24_111206_create_urunkategori_table', 1),
('2015_05_24_150233_create_urunler_table', 1),
('2015_05_24_160107_create_urunresim_table', 1),
('2015_06_10_185757_create_galerikategori_table', 1),
('2015_06_12_175228_create_galeri_table', 1),
('2015_06_14_172618_create_galeriresim_table', 1),
('2015_10_12_203535_create_siparisler_table', 2),
('2015_11_10_181754_create_moduller_table', 3),
('2016_02_15_233556_create_ekstraalan_table', 4),
('2016_02_21_232003_create_mailler_table', 5),
('2015_02_15_185537_create_system_registries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `moduller`
--

CREATE TABLE `moduller` (
  `id` int(10) UNSIGNED NOT NULL,
  `moduladi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `yukseklik` int(11) NOT NULL,
  `genislik` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moduller`
--

INSERT INTO `moduller` (`id`, `moduladi`, `durum`, `yukseklik`, `genislik`, `created_at`, `updated_at`) VALUES
(1, 'Referanslar', 1, 50, 50, '0000-00-00 00:00:00', '2016-03-20 19:29:34'),
(2, 'Siparişler', 1, 0, 0, '0000-00-00 00:00:00', '2016-03-06 15:06:29'),
(3, 'Duyurular', 1, 0, 0, '0000-00-00 00:00:00', '2015-12-20 19:11:31'),
(4, 'Videolar', 1, 120, 120, '0000-00-00 00:00:00', '2015-11-11 19:10:18'),
(5, 'Ürünler', 1, 1140, 650, '0000-00-00 00:00:00', '2016-04-30 14:15:45'),
(6, 'Galeri', 1, 1140, 650, '0000-00-00 00:00:00', '2016-04-30 13:40:22'),
(7, 'Haberler', 1, 750, 375, '0000-00-00 00:00:00', '2016-04-25 19:47:43'),
(8, 'İletişim', 1, 0, 0, '0000-00-00 00:00:00', '2016-03-16 19:55:47'),
(9, 'GenelAyarlar', 1, 207, 40, '0000-00-00 00:00:00', '2016-03-02 20:32:18'),
(10, 'Slider', 1, 1905, 514, '0000-00-00 00:00:00', '2016-03-24 19:28:41'),
(11, 'İnsan Kaynakları', 1, 0, 0, '0000-00-00 00:00:00', '2016-03-20 11:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referans`
--

CREATE TABLE `referans` (
  `id` int(10) UNSIGNED NOT NULL,
  `refdil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refbaslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reficerik` text COLLATE utf8_unicode_ci NOT NULL,
  `refresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refslug` text COLLATE utf8_unicode_ci NOT NULL,
  `refkeyw` text COLLATE utf8_unicode_ci NOT NULL,
  `refdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `referans`
--

INSERT INTO `referans` (`id`, `refdil`, `refbaslik`, `reficerik`, `refresim`, `refslug`, `refkeyw`, `refdesc`, `created_at`, `updated_at`) VALUES
(1, 'tr', 'BMW', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n', 'indir-4jpg7r7bi.jpg', '', '', '', '2016-03-24 23:03:26', '2016-03-24 23:03:26'),
(2, 'tr', 'Ford', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n', 'ford-logo-931498da4f-seeklogocomgifoq9g1.gif', 'ford', 'cxcx', 'cxcx', '2016-03-26 20:13:21', '2016-04-14 19:48:58'),
(3, 'tr', 'Ferrari Logo', '<p>Ferrari araba</p>\r\n', 'indirjpgdhszl.jpg', '', '', '', '2016-03-26 20:14:36', '2016-03-26 20:14:36'),
(4, 'tr', 'Fiat Logo', '<p>Fiat Logo</p>\r\n', 'fiat-logo-2002pngbiwll.png', '', '', '', '2016-03-26 20:41:53', '2016-03-26 20:41:53'),
(5, 'tr', 'Tofaş Logo', '<p>Tofaş araba</p>\r\n', 'brandgifgnzzd.gif', '', '', '', '2016-03-26 20:59:16', '2016-03-26 20:59:16'),
(6, 'tr', 'Alfa Romeo Logo', '<p>Alfa romeo araba</p>\r\n', 'imagesjpg5ejlw.jpg', '', '', '', '2016-03-26 21:00:12', '2016-03-26 21:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(10) UNSIGNED NOT NULL,
  `katid` int(11) NOT NULL,
  `modulid` int(11) NOT NULL,
  `durum` int(11) NOT NULL,
  `sayfadil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sayfaurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sayfaadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sayfaicerik` text COLLATE utf8_unicode_ci NOT NULL,
  `sayfakeyw` text COLLATE utf8_unicode_ci NOT NULL,
  `sayfadesc` text COLLATE utf8_unicode_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `katid`, `modulid`, `durum`, `sayfadil`, `sayfaurl`, `sayfaadi`, `sayfaicerik`, `sayfakeyw`, `sayfadesc`, `sira`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 'tr', 'hakkimizda', 'Hakkımızda', '<p>G&uuml;venliği uluslararası kart kuruluşlarınca onaylı, en gelişmiş teknoloji ile donatılmış hizmet birimleri ve her m&uuml;şterinin ihtiya&ccedil;larına &ouml;zel geliştirilmiş esnek yazılımlarla EMV standartlarına uygun ve onaylı bir altyapıdan hizmet almak i&ccedil;in sizi Provus hizmet d&uuml;nyasına davet ediyoruz.<br />\r\n<br />\r\nKurumsal, 2001 yılında bankalara kart, işyeri ve ATM operasyonları konularında, ayrıca bankalar yanında farklı sekt&ouml;rlerden fimalara baskı/zarflama ve kart kişiselleştirme hizmetleri konularında dış kaynak kullanım hizmeti verme amacıyla kuruldu ve Ocak 2014 itibariyle MasterCard b&uuml;nyesine katıldı.<br />\r\n<br />\r\nYurtdışında da b&uuml;y&uuml;meyi hedefleyen Provus halen 8 &uuml;lkede faaliyet g&ouml;steriyor.</p>\r\n\r\n<p>Kurumsal bug&uuml;n, 240 kişilik konusunda uzman ve deneyimli kadrosu, g&uuml;venliği uluslararası kuruluşlarca onaylanmış altyapısı (PCI, Vendor Sertifikasyonu) ile yurti&ccedil;i ve yurtdışından 63 m&uuml;şteriye hizmet vermekte ve 11.000.000 kart, 100.000 POS, 5.500 ATM ve 11.500.000 HGS Etiket, Kurumsal altyapısından hizmet almaktadır.</p>\r\n', 'Kurumsal,Hakkımızda,vizyon misyon,kurumsal site', 'Kurumsal,Hakkımızda sayfası,kurumsal site yazılımı', 1, '2016-03-24 21:00:20', '2016-03-24 21:00:20'),
(2, 1, 0, 1, 'tr', 'vizyon', 'Vizyon', '<p><img src="http://www.cronom.com/img/vizyon.png" style="float:right; height:auto; margin:0px auto" />T&uuml;rkiye&acute;de ve uluslararası arenada saygı g&ouml;ren, nitelikli personeli ve gelişmiş altyapısı ile y&uuml;ksek kalitede teknik &ccedil;&ouml;z&uuml;mler &uuml;reten bir yazılım merkezi haline gelmek ve ulusal/uluslararası firmalarla birlikte ulusal projelerde yer almaktır</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'vizyon,kurumsal,site', 'Vizyon sayfası', 1, '2016-03-24 21:09:41', '2016-03-24 21:09:41'),
(3, 0, 7, 1, 'tr', 'haberler', 'Haberler', '', 'Kurumsal Site,Haberler,haberler sayfası,haberler içerik', 'Haberler sayfası', 2, '2016-03-24 21:12:03', '2016-03-24 21:12:03'),
(4, 0, 3, 0, 'tr', 'duyurular', 'Duyurular', '', 'Duyurular,duyuru,etiket', 'Duyurular sayfa listesi', 3, '2016-03-24 21:19:52', '2016-03-26 20:11:28'),
(5, 0, 6, 1, 'tr', 'galeri', 'Galeri', '', 'Galeri,galeri sayfası', 'Galeri sayfamız', 4, '2016-03-24 21:47:57', '2016-03-24 21:47:57'),
(6, 5, 6, 0, 'tr', 'merkez-bina', 'Merkez Bina', '', 'merkez,bina resimler,etiket', 'Merkez resimler', 0, '2016-03-24 21:53:34', '2016-03-24 21:53:34'),
(7, 0, 5, 1, 'tr', 'urunler', 'Ürünler', '', 'Ürünlerimiz,ürün,liste', 'ürünler,oto galeri', 5, '2016-03-24 22:07:19', '2016-03-24 22:07:19'),
(8, 7, 5, 0, 'tr', 'oto-galeri', 'Oto Galeri', '', '', 'oto galerimiz', 0, '2016-03-24 22:09:11', '2016-03-24 22:09:27'),
(9, 0, 5, 1, 'en', 'products', 'Products', '', 'products,page', 'Products', 1, '2016-03-24 22:47:26', '2016-03-24 22:47:51'),
(10, 9, 5, 0, 'en', 'oto-gallery', 'Oto Gallery', '', 'otomobil,yeni,2016 otomobil', 'oto galerimiz', 0, '2016-03-24 22:48:37', '2016-03-24 22:48:37'),
(11, 0, 8, 1, 'tr', 'iletisim', 'İletişim', '', 'İletişim Sayfası', 'iletişim sayfa', 8, '2016-03-24 23:04:34', '2016-03-26 20:10:23'),
(12, 0, 4, 1, 'tr', 'video', 'Video', '', 'Video,sayfası', 'Video sayfası', 6, '2016-03-26 20:09:57', '2016-03-26 20:10:34'),
(13, 6, 6, 0, 'tr', 'ic-tasarim', 'İç Tasarım', '', 'dsfsdfs,fggf', 'iç tasarım', 0, '2016-03-26 21:05:40', '2016-03-26 21:14:14'),
(14, 0, 11, 1, 'tr', 'ik', 'İK', '', 'İnsan Kaynakları', 'ik', 5, '2016-03-27 12:51:24', '2016-03-27 12:52:09'),
(15, 0, 0, 1, 'en', 'abouts', 'Abouts', '<p>The Beatles were an English rock band, formed in Liverpool in 1960. With members John Lennon, Paul McCartney, George Harrison and Ringo Starr, they became widely regarded as the foremost and most influential act of the rock era...The Beatles were an English rock band, formed in Liverpool in 1960. With members John Lennon, Paul McCartney, George Harrison and Ringo Starr, they became widely regarded as the foremost and most influential act of the rock era...The Beatles were an English rock band, formed in Liverpool in 1960. With members John Lennon, Paul McCartney, George Harrison and Ringo Starr, they became widely regarded as the foremost and most influential act of the rock era...The Beatles were an English rock band, formed in Liverpool in 1960. With members John Lennon, Paul McCartney, George Harrison and Ringo Starr, they became widely regarded as the foremost and most influential act of the rock era...</p>\r\n', 'Abouts page', 'Abouts page', 1, '2016-03-27 13:15:38', '2016-03-27 13:15:38'),
(16, 0, 7, 1, 'en', 'news', 'News', '<p>Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.</p>\r\n', 'Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.', 'Dictatorship naturally arises out of democracy, and the most aggravated form of tyranny and slavery out of the most extreme liberty.', 3, '2016-03-27 13:21:54', '2016-03-27 13:22:26'),
(17, 0, 3, 0, 'en', 'anonscument', 'Anonscument', '', 'Anons', 'Anons', 2, '2016-03-27 14:19:05', '2016-03-27 14:27:42'),
(18, 0, 6, 1, 'en', 'gallery', 'Gallery', '', 'Gallery', 'gallery', 4, '2016-03-27 15:29:14', '2016-03-27 15:29:14'),
(19, 0, 11, 1, 'en', 'human-resources', 'Human Resources', '', 'Human Resources', 'Human Resources', 7, '2016-03-27 15:42:59', '2016-03-27 15:51:44'),
(20, 0, 8, 1, 'en', 'contact', 'Contact', '', 'Contact', 'Contact', 8, '2016-03-27 15:49:58', '2016-03-27 15:52:10'),
(21, 0, 4, 1, 'en', 'videos', 'Videos', '', 'Videos', 'Videos', 6, '2016-03-27 15:51:19', '2016-03-27 15:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `urunidi` int(11) NOT NULL,
  `urunadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fiyat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adunvan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres` text COLLATE utf8_unicode_ci NOT NULL,
  `telefon` text COLLATE utf8_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siparisler`
--

INSERT INTO `siparisler` (`id`, `urunidi`, `urunadi`, `adet`, `fiyat`, `durum`, `adunvan`, `email`, `adres`, `telefon`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 5, 'Alfa Romeo Yeni', '22', '445000TL', '0', 'Gurkan Ersan', 'gurkanersan@hotmail.com.tr', '1765 sok. no:12 izmir', '05355005050', 'Çabuk teslimat yapılırsa sevinirim.', '2016-03-27 17:23:02', '2016-03-27 17:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `siteayar`
--

CREATE TABLE `siteayar` (
  `id` int(10) UNSIGNED NOT NULL,
  `durum` int(11) NOT NULL,
  `siteadi` text COLLATE utf8_unicode_ci NOT NULL,
  `dil` text COLLATE utf8_unicode_ci NOT NULL,
  `sitekeyw` text COLLATE utf8_unicode_ci NOT NULL,
  `sitedesc` text COLLATE utf8_unicode_ci NOT NULL,
  `sitetel` text COLLATE utf8_unicode_ci NOT NULL,
  `siteadres` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siteayar`
--

INSERT INTO `siteayar` (`id`, `durum`, `siteadi`, `dil`, `sitekeyw`, `sitedesc`, `sitetel`, `siteadres`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kurumsal site', 'tr', 'kurumsal,site,turkçe', 'Kurumsal site türkçe açıklama', '+90 232 999 96 88', 'Seferihisar, 35460 Seferihisar/İzmir', '2015-11-19 17:05:41', '2016-01-17 18:47:29'),
(2, 1, 'Business Site', 'en', 'Business Site,English', 'English business site', '0232 999 96 88', 'Merhaba Sok.', '2015-11-19 17:06:20', '2015-12-13 09:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slidersira` int(11) NOT NULL,
  `sliderdil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slideryazi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sliderresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slidersira`, `sliderdil`, `slideryazi`, `sliderresim`, `created_at`, `updated_at`) VALUES
(1, 1, 'tr', '--', 'mobilwebsite-com-ab7jpggt6ka.jpg', '2016-03-24 19:13:32', '2016-03-24 20:45:39'),
(2, 2, 'tr', '---', 'seopaketi-com-db7jpggnvam.jpg', '2016-03-24 19:15:27', '2016-03-24 19:33:33'),
(3, 3, 'tr', 'Yeni nesil teknoloji-Laravel-Framework', 'slide-3-bgjpgj8he5.jpg', '2016-03-24 20:48:21', '2016-03-24 20:48:21'),
(4, 1, 'en', '--', 'mobilwebsite-com-ab7jpggt6ka1jpgsowxu.jpg', '2016-03-27 14:13:34', '2016-03-27 14:13:34'),
(5, 2, 'en', '--', 'seopaketi-com-db7jpggnvam1jpgjp5l5.jpg', '2016-03-27 14:14:16', '2016-03-27 14:14:16'),
(6, 3, 'en', 'Generation Next-Laravel-Framework', 'slide-3-bgjpgj8he51jpgfjue0.jpg', '2016-03-27 14:15:45', '2016-03-27 14:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `urunkatid` int(11) NOT NULL,
  `urunadi` text COLLATE utf8_unicode_ci NOT NULL,
  `urunslug` text COLLATE utf8_unicode_ci NOT NULL,
  `urunkodu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urunetiket` text COLLATE utf8_unicode_ci NOT NULL,
  `urundesc` text COLLATE utf8_unicode_ci NOT NULL,
  `urunicerik` text COLLATE utf8_unicode_ci NOT NULL,
  `urunresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urunfiyati` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urundurum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urundil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `urunkatid`, `urunadi`, `urunslug`, `urunkodu`, `urunetiket`, `urundesc`, `urunicerik`, `urunresim`, `urunfiyati`, `urundurum`, `urundil`, `anasayfa`, `created_at`, `updated_at`) VALUES
(1, 7, '2016 Hız Serisi', '2016-hiz-serisi', '2016speed', 'ürün,otomobil,yeni 2016', 'otomobil 2016 model', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'bentley1jpgxdbrm.jpg', '23000TL', '1', 'tr', 1, '2016-03-24 22:10:54', '2016-03-27 14:37:20'),
(2, 8, 'BMW 2016', 'bmw-2016', 'bmwyeni', 'bmw yeni,özel araba', 'Bmw araba', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'imagesjpg7oz20.jpg', '450000TL', '1', 'tr', 1, '2016-03-24 22:13:05', '2016-03-27 12:49:07'),
(3, 8, 'FIAT Doblo Yeni Seri', 'fiat-doblo-yeni-seri', 'fiat2016', 'ürün fiat,fiat araba', 'fiat araba galeri', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '192020110419093002833-djpggxqiy.jpg', '185000TL', '1', 'tr', 1, '2016-03-24 22:17:48', '2016-03-24 22:17:48'),
(4, 8, 'BMW Siyah', 'bmw-siyah', 'siyah', 'bmw siyah', 'siyah bmw resmi', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '3114jpgeh5mf.jpg', '100500TL', '1', 'tr', 1, '2016-03-24 22:25:20', '2016-03-27 12:48:50'),
(5, 8, 'Alfa Romeo Yeni', 'alfa-romeo-yeni', 'alfa', 'alfa romeo', 'alfa yeni', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'alfa-romeo-8c-competizione-326517jpglrpyg.jpg', '445000TL', '1', 'tr', 1, '2016-03-26 21:19:51', '2016-03-26 21:19:51'),
(6, 8, 'Renault Araba', 'renault-araba', 'renault', 'Renault Araba', 'Renault Araba', '<p>Renault S.A., Fransız ara&ccedil; &uuml;reticisi. Otomobil, kamyon, trakt&ouml;r, tank, tren, u&ccedil;ak, motosiklet, bisiklet, otob&uuml;s gibi bir&ccedil;ok farklı boyda ara&ccedil; &uuml;retir. T&uuml;rkiye&#39;de Bursa&#39;da kurulu bulunan Oyak-Renault ortaklığı ile yatırımı vardır.Renault S.A., Fransız ara&ccedil; &uuml;reticisi. Otomobil, kamyon, trakt&ouml;r, tank, tren, u&ccedil;ak, motosiklet, bisiklet, otob&uuml;s gibi bir&ccedil;ok farklı boyda ara&ccedil; &uuml;retir. T&uuml;rkiye&#39;de Bursa&#39;da kurulu bulunan Oyak-Renault ortaklığı ile yatırımı vardır.Renault S.A., Fransız ara&ccedil; &uuml;reticisi. Otomobil, kamyon, trakt&ouml;r, tank, tren, u&ccedil;ak, motosiklet, bisiklet, otob&uuml;s gibi bir&ccedil;ok farklı boyda ara&ccedil; &uuml;retir. T&uuml;rkiye&#39;de Bursa&#39;da kurulu bulunan Oyak-Renault ortaklığı ile yatırımı vardır.</p>\r\n', 'renault-captur-helly-2-800x0wjpgkhzpx.jpg', '450000TL', '1', 'tr', 1, '2016-03-27 11:07:04', '2016-03-27 11:07:04'),
(7, 8, 'Honda Civic', 'honda-civic', 'civic', 'Honda civic', 'Honda civic', '<p>Honda 1948 yılında Soichiro Honda tarafından Japonya&#39;da kurulmuş Japon otomotiv firması. Başlangı&ccedil;ta motosiklet &uuml;retimi yapan firma zamanla otomobil, su motoru, robot, g&uuml;&ccedil; ekipmanları motor ve u&ccedil;ak &uuml;reten bir firma haline gelmiştirHonda 1948 yılında Soichiro Honda tarafından Japonya&#39;da kurulmuş Japon otomotiv firması. Başlangı&ccedil;ta motosiklet &uuml;retimi yapan firma zamanla otomobil, su motoru, robot, g&uuml;&ccedil; ekipmanları motor ve u&ccedil;ak &uuml;reten bir firma haline gelmiştirHonda 1948 yılında Soichiro Honda tarafından Japonya&#39;da kurulmuş Japon otomotiv firması. Başlangı&ccedil;ta motosiklet &uuml;retimi yapan firma zamanla otomobil, su motoru, robot, g&uuml;&ccedil; ekipmanları motor ve u&ccedil;ak &uuml;reten bir firma haline gelmiştirHonda 1948 yılında Soichiro Honda tarafından Japonya&#39;da kurulmuş Japon otomotiv firması. Başlangı&ccedil;ta motosiklet &uuml;retimi yapan firma zamanla otomobil, su motoru, robot, g&uuml;&ccedil; ekipmanları motor ve u&ccedil;ak &uuml;reten bir firma haline gelmiştir</p>\r\n', '2012-honda-civic-concept-5jpgcu1te.jpg', '880000TL', '1', 'tr', 1, '2016-03-27 11:11:16', '2016-03-27 11:11:16'),
(8, 7, 'Toyota Corolla', 'toyota-corolla', 'corolla', 'Toyota Corolla', 'Toyota Corolla', '<p>En yeni&nbsp;<strong>Toyota</strong>&nbsp;modellerini, binek, ticari, spor ve hibrit ara&ccedil;larını keşfedin. Model karşılaştırma, kampanyalar ve size uygun donanım paket se&ccedil;enekleri i&ccedil;in&nbsp;En yeni&nbsp;<strong>Toyota</strong>&nbsp;modellerini, binek, ticari, spor ve hibrit ara&ccedil;larını keşfedin. Model karşılaştırma, kampanyalar ve size uygun donanım paket se&ccedil;enekleri i&ccedil;in&nbsp;En yeni&nbsp;<strong>Toyota</strong>&nbsp;modellerini, binek, ticari, spor ve hibrit ara&ccedil;larını keşfedin. Model karşılaştırma, kampanyalar ve size uygun donanım paket se&ccedil;enekleri i&ccedil;in&nbsp;En yeni&nbsp;<strong>Toyota</strong>&nbsp;modellerini, binek, ticari, spor ve hibrit ara&ccedil;larını keşfedin. Model karşılaştırma, kampanyalar ve size uygun donanım paket se&ccedil;enekleri i&ccedil;in&nbsp;</p>\r\n', 'bg-body23jpgzzosr.jpg', '780000TL', '1', 'tr', 1, '2016-03-27 11:14:01', '2016-04-19 20:31:30'),
(9, 10, 'Speed Series', 'speed-series', 'speed series', 'speed,series,new', 'speed new', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', '2012-honda-civic-concept-5jpgcu1tejpgaew6d.jpg', '430000TL', '1', 'en', 1, '2016-03-27 14:38:33', '2016-03-27 14:38:33'),
(10, 10, 'New Motor', 'new-motor', 'newmoto', 'New Motor', 'New Motor', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', '2014-toyota-camry-1963003-1-smjpginpdijpgkztco.jpg', '450000TL', '1', 'en', 1, '2016-03-27 14:45:44', '2016-03-27 14:45:44'),
(11, 10, 'Fast Speed Fiat', 'fast-speed-fiat', 'fast', 'Fast Speed Fiat', 'Fast Speed Fiat', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', '192020110419093002833-djpggxqiyjpggtmr6.jpg', '185000TL', '1', 'en', 1, '2016-03-27 14:47:41', '2016-03-27 14:47:41'),
(12, 10, 'New Break Series', 'new-break-series', 'break', 'new,break', 'break new', '<p>What is your favorite way to get around? Do you drive or take public transportation? Or do you prefer to be outside, zipping from place to place on a hoverboard? Hoverboards are the hot new&nbsp;<a href="javascript:openpop(\'/lesson_vocab/list/7116?context=portable\',\'10417\', \'400\', \'400\');">trend</a>. They were first imagined in the 1980s movie,&nbsp;<em>Back to the Future</em>. Unlike the hoverboards in the movie, today&rsquo;s hoverboards do not actually fly. However, they can move without any help from the rider. So if you are on a hoverboard, you don&rsquo;t have to do any work&hellip; all you have to do is stand there and move your feet!<br />\r\n<br />\r\nOn the other hand, there are some risks to hoverboards. People can fall off them easily, causing injuries. They have even been known to explode when they get too hot! Recently, Amazon.com stopped selling hoverboards altogether. Maybe, in the future, they will improve the design. Who knows&hellip; we might even get a hoverboard that actually flies!<br />\r\n<br />\r\nAndy and Jessica are talking about hoverboards. Listen and find out what they think.</p>\r\n', 'alfa-romeo-8c-competizione-326517jpglrpygjpgcdlrn.jpg', '23000TL', '1', 'en', 1, '2016-03-27 15:13:02', '2016-03-27 15:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `urunresim`
--

CREATE TABLE `urunresim` (
  `id` int(10) UNSIGNED NOT NULL,
  `urunid` int(11) NOT NULL,
  `urunresimler` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `urunresim`
--

INSERT INTO `urunresim` (`id`, `urunid`, `urunresimler`, `created_at`, `updated_at`) VALUES
(1, 1, '6jpgvffjx.jpg', '2016-03-27 17:20:59', '2016-03-27 17:20:59'),
(2, 1, 'imagesjpgnkjhj.jpg', '2016-03-27 17:20:59', '2016-03-27 17:20:59'),
(3, 1, 'indirjpgafz5c.jpg', '2016-03-27 17:20:59', '2016-03-27 17:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analiytcs_profilid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analytics_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analiytcs_sifre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `analiytcs_profilid`, `analytics_mail`, `analiytcs_sifre`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gürkan', 'info@keykubad.com', '$2y$10$lDTOOD6f.wfvC28yfWeJi.lYLgG9U8AgSnFwPpDl9RItQpxEfUduO', '97170552', '510542731251-45kdrn8bl2ju0gftqv9btiigp74a2plu@developer.gserviceaccount.com', '../storage/keykubad-d368f6d28bdc.p12', 'dIwoBMBOv7g1X8vyvBP3Zuzk0XGGIP5Ye1NAM25GyYSVVSGufQSZIHBwtjEB', '2015-10-11 12:17:10', '2016-03-24 18:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `videoadi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videodurum` int(11) NOT NULL,
  `videodil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videourl` text COLLATE utf8_unicode_ci NOT NULL,
  `videoicerik` text COLLATE utf8_unicode_ci NOT NULL,
  `videoslug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videokeyw` text COLLATE utf8_unicode_ci NOT NULL,
  `videodesc` text COLLATE utf8_unicode_ci NOT NULL,
  `videoresim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `videoadi`, `videodurum`, `videodil`, `videourl`, `videoicerik`, `videoslug`, `videokeyw`, `videodesc`, `videoresim`, `anasayfa`, `created_at`, `updated_at`) VALUES
(1, 'Cpanel Tanıtım Videosu', 1, 'tr', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Jd9zlgymEmQ" frameborder="0" allowfullscreen></iframe>', '<p>Cpanel Canlı Tanıtım Videosu&nbsp;Cpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım Videosu</p>\r\n\r\n<p>Cpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım VideosuCpanel Canlı Tanıtım Videosu</p>\r\n', 'cpanel-tanitim-videosu', 'cpanel tanıtım,cpanel video', 'Cpanel tanıtım videosu', 'imagesjpgmjrip.jpg', 1, '2016-03-26 20:07:27', '2016-03-26 20:07:27'),
(2, 'Otomobil Fuarı', 1, 'tr', '<iframe frameborder="0" width="560" height="315"  src="//www.dailymotion.com/embed/video/x3zry2m" allowfullscreen></iframe>', '<p>&nbsp;</p>\r\n\r\n<p>G&Ouml;R&Uuml;NT&Uuml; D&Ouml;K&Uuml;M&Uuml; : -Fuarda sergilenen otomobiller -Test s&uuml;r&uuml;ş&uuml; NEW ABD&#39;nin New York kentinde başlayan 116. Uluslararası Otomobil Fuarı&#39;nda son model ara&ccedil;lar g&ouml;r&uuml;c&uuml;ye &ccedil;ıktı.Haber</p>\r\n', 'otomobil-fuari', 'oto fuarı', 'oto fuarı', '3114jpgeh5mfjpgz5wwp.jpg', 0, '2016-03-27 12:55:44', '2016-03-27 12:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstraalan`
--
ALTER TABLE `ekstraalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeriresim`
--
ALTER TABLE `galeriresim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genelayar`
--
ALTER TABLE `genelayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iletisim_email_unique` (`email`);

--
-- Indexes for table `mailler`
--
ALTER TABLE `mailler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mailler_email_unique` (`email`);

--
-- Indexes for table `moduller`
--
ALTER TABLE `moduller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteayar`
--
ALTER TABLE `siteayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunresim`
--
ALTER TABLE `urunresim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ekstraalan`
--
ALTER TABLE `ekstraalan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galeriresim`
--
ALTER TABLE `galeriresim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `genelayar`
--
ALTER TABLE `genelayar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mailler`
--
ALTER TABLE `mailler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `moduller`
--
ALTER TABLE `moduller`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `referans`
--
ALTER TABLE `referans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siteayar`
--
ALTER TABLE `siteayar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `urunresim`
--
ALTER TABLE `urunresim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
