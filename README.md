# News Up

News Up, kullanıcıların güncel haberleri takip edebileceği ve paylaşabileceği bir web uygulamasıdır. PHP, CSS ve JavaScript teknolojileri kullanılarak geliştirilmiştir. Proje, XAMPP ile kolayca kurularak yerel ortamda çalıştırılabilir.

## İçindekiler

- [Genel Bakış](#genel-bakış)
- [Özellikler](#özellikler)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Dizin Yapısı](#dizin-yapısı)
- [Teknolojiler](#teknolojiler)
- [Katkıda Bulunanlar](#katkıda-bulunanlar)
- [Lisans](#lisans)

## Genel Bakış

News Up ile kullanıcılar:
- Güncel haberleri okuyabilir,
- Kendi haberlerini ekleyebilir,
- Haberleri kategorilere göre filtreleyebilir,
- Yorum yapabilir ve diğer kullanıcılarla etkileşime geçebilir.

## Özellikler

- **Kullanıcı Kaydı ve Girişi:** Kullanıcılar hesap oluşturabilir ve giriş yapabilir.
- **Haber Paylaşımı:** Kayıtlı kullanıcılar yeni haber ekleyebilir.
- **Kategori Sistemi:** Haberler kategorilere ayrılmıştır (Gündem, Spor, Teknoloji, vs.).
- **Yorum Yapma:** Kullanıcılar haberler üzerine yorum bırakabilir.
- **Arama:** Haber başlığına veya içeriğine göre arama yapılabilir.
- **Duyarlı (Responsive) Tasarım:** Tüm cihazlarda sorunsuz görüntülenir.
- **Yönetici Paneli:** Yöneticiler haberleri ve kullanıcıları yönetebilir.

## Kurulum

### Gereksinimler

- XAMPP (veya PHP, MySQL destekli başka bir sunucu)
- Web tarayıcısı

### Adımlar

1. **Projeyi Klonlayın:**

   ```bash
   git clone https://github.com/mcskny/NewsUpWebSite.git
   ```

2. **XAMPP Kurulumu:**
   - XAMPP programını indirin ve kurun.
   - XAMPP’ı başlatın ve Apache ile MySQL servislerini açın.

3. **Proje Dosyalarını Taşıyın:**
   - Windows için: `C:\xampp\htdocs` klasöründeki tüm dosyaları silin, proje klasörünü buraya kopyalayın.
   - Mac OS için: XAMPP'ın "volumes" sekmesinden mount edin, masaüstünde çıkan harici disk üzerinde `htdocs` klasörüne projeyi kopyalayın.

4. **Veritabanını Kurun:**
   - phpMyAdmin’e gidin (`http://localhost/phpmyadmin`)
   - Yeni bir veritabanı oluşturun (örn. `newsup`)
   - Projede yer alan `newsup.sql` dosyasını içe aktarın.

5. **Siteyi Başlatın:**
   - Tarayıcınızda `http://localhost` adresine gidin.

## Kullanım

- Ana sayfada en güncel haberleri görebilirsiniz.
- Hesap açarak haber ekleyebilir veya mevcut haberlere yorum yapabilirsiniz.
- Kategoriler ve arama kutusu ile istediğiniz haberi hızlıca bulabilirsiniz.
- Yönetici olarak giriş yaptıysanız haber ve kullanıcı yönetimi yapabilirsiniz.

## Dizin Yapısı

```
NewsUpWebSite/
├── assets/           # CSS, JS ve medya dosyaları
├── includes/         # PHP yardımcı dosyalar ve fonksiyonlar
├── pages/            # Sayfa şablonları (ör. anasayfa, haber detay)
├── admin/            # Yönetici paneli
├── newsup.sql        # Veritabanı yedeği
├── index.php         # Ana giriş noktası
└── README.md
```

## Teknolojiler

- PHP
- MySQL
- HTML5 & CSS3
- JavaScript
- Bootstrap (isteğe bağlı)

## Katkıda Bulunanlar

- [mcskny](https://github.com/mcskny)

## Lisans

Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.
