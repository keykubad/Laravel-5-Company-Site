<?php 
//sabit dil değişimlerim
if(\Request::segment(1)=="en"){
		return [
		"urun_fiyat"=>"PRODUCT PRICE",
		"urun_kod"=>"PRODUCT CODE",
		"urun_kategori"=>"PRODUCT CATEGORY",
		"urun_ad"=>"PRODUCT NAME",
		"stok_durum"=>"STOCK STATUS",
		"stok_durum"=>"STOCK STATUS",
		"stok_var"=>"In Stock",
		"stok_yok"=>"Out Of Stock",
		"siparis_ver"=>"ORDER",
		"kisa_detay"=>"SHORT DESCRIPTION",
		"detay"=>"DESCRIPTION",
		"benzer_urun"=>"Similar Products",
		"keyword"=>"Tags",
		"adunvan"=>"Name and Surname",
		"email"=>"Email",
		"tel"=>"Telephone",
		"adres"=>"Address",
		"mesaj"=>"Your Message",
		"adet"=>"Piece",
		"geri"=>"Back",
		"cinsiyet"=>"Gender",
		"ik"=>"Human Resources",
		"dogumtarih"=>"Date of Birth",
		"dogumyer"=>"Place of Birth",
		"tecrube"=>"Experiences",
		"referans"=>"Your References",
		"ozgecmis"=>"Resume",
		"tumincele"=>"Examine all",
		"erkek"=>"Male",
		"galeri"=>"Gallery",
		"gonder"=>"Send",
		"temizle"=>"Clear",
		"siptamam"=>"Order Completed",
		"bayan"=>"Female"
		];
}elseif(\Request::segment(1)=="de"){
		return [
		"urun_fiyat"=>"PRODUKT PREIS",
		"urun_kod"=>"PRODUKT CODE",
		"urun_kategori"=>"PRODUKT KATEGORIE",
		"urun_ad"=>"PRODUKT NAME",
		"stok_durum"=>"LAGER STATUS",
		"stok_durum"=>"STOCK STATUS",
		"stok_var"=>",Lagernd",
		"stok_yok"=>"Ausver Kauft",
		"siparis_ver"=>"BESTELLEN",
		"kisa_detay"=>"KURZ BESCHREIBUNG",
		"detay"=>"BESCHREIBUNG",
		"benzer_urun"=>"Ähnliche Produkte",
		"keyword"=>"Stichwortes",
		"adunvan"=>"nom et prénom",
		"email"=>"Email",
		"tel"=>"Telefon",
		"adres"=>"Adresse",
		"mesaj"=>"Ihre Nachricht",
		"adet"=>"Anzahl",
		"geri"=>"Back",
		"cinsiyet"=>"Geschlecht",
		"ik"=>"Personal Form",
		"dogumtarih"=>"Geburts Datum",
		"dogumyer"=>"Geburt Sort",
		"tecrube"=>"Erfahrungen",
		"referans"=>"Ihre Referenzen",
		"ozgecmis"=>"Zusammenfassung",
		"erkek"=>"Mann",
		"tumincele"=>"Examine all",
		"galeri"=>"Galerie",
		"gonder"=>"Einreichen",
		"temizle"=>"Klar",
		"siptamam"=>"Bestellung Abschließen",
		"bayan"=>"Damen"
		];
}elseif(\Request::segment(1)=="fr"){
		return [
		"urun_fiyat"=>"PRIX DU PRODUIT",
		"urun_kod"=>"CODE PRODUIT",
		"urun_kategori"=>"CATÉGORIE DE PRODUIT",
		"urun_ad"=>"NOM DU PRODUIT",
		"stok_durum"=>"ÉTAT DES STOCKS",
		"stok_durum"=>"STOCK STATUS",
		"stok_var"=>"Avoir en stock",
		"stok_yok"=>"Rupture De Stock",
		"siparis_ver"=>"Ordonné",
		"kisa_detay"=>"BREVE DESCRIPTION",
		"detay"=>"DESCRIPTION",
		"benzer_urun"=>"Produits Connexes",
		"keyword"=>"Mots clés",
		"adunvan"=>"nom et prénom",
		"email"=>"Mail",
		"tel"=>"Téléphone",
		"adres"=>"Adresse",
		"mesaj"=>"Votre Message",
		"adet"=>"Nombre",
		"geri"=>"Back",
		"cinsiyet"=>"Sexe",
		"ik"=>"Ressources Humaines",
		"dogumtarih"=>"Date de Naissance",
		"dogumyer"=>"Lieu de Naissance",
		"tecrube"=>"Expériences",
		"referans"=>"Vos Références",
		"ozgecmis"=>"Curriculum Vitae",
		"erkek"=>"Homme",
		"tumincele"=>"Examine all",
		"galeri"=>"Galerie",
		"gonder"=>"Soumettre",
		"temizle"=>"Clair",
		"siptamam"=>"Complet Commander",
		"bayan"=>"Dames"
		];
}else{
		return [
		"urun_fiyat"=>"ÜRÜN FİYATI",
		"urun_kod"=>"ÜRÜN KODU",
		"urun_kategori"=>"ÜRÜN KATEGORİSİ",
		"urun_ad"=>"ÜRÜN ADI",
		"stok_durum"=>"STOK DURUMU",
		"stok_var"=>"Stok var",
		"stok_yok"=>"Tükendi",
		"siparis_ver"=>"SİPARİŞ VER",
		"kisa_detay"=>"KISA AÇIKLAMA",
		"detay"=>"AÇIKLAMA",
		"benzer_urun"=>"Benzer Ürünler",
		"keyword"=>"Etiketler",
		"adunvan"=>"Adınız Soyadınız",
		"email"=>"Mail Adresi",
		"tel"=>"Telefon",
		"adres"=>"Adres",
		"mesaj"=>"Mesajınız",
		"adet"=>"Adet",
		"geri"=>"Geri Git",
		"cinsiyet"=>"Cinsiyet",
		"ik"=>"İnsan Kaynakları",
		"dogumtarih"=>"Doğum Tarihi",
		"dogumyer"=>"Doğum Yeri",
		"tecrube"=>"Tecrübeler",
		"referans"=>"Referanslar",
		"ozgecmis"=>"Özgeçmiş",
		"erkek"=>"Erkek",
		"tumincele"=>"Tümünü incele",
		"galeri"=>"Galeri",
		"gonder"=>"Gönder",
		"temizle"=>"Temizle",
		"siptamam"=>"Siparişi Tamamla",
		"devamoku"=>"Devamını oku",
		"sonkonu"=>"Son Yazılarımız",
		"bayan"=>"Bayan"
		];
}