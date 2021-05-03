# is-bankasi
İş Bankası Sanal Pos Kurulumu

isBankasiConf.php dosyasının içersindeki firma bilgilerini doldurunuz. Sonrasında, isBankasiPost.php içersindeki

/* fatura bilgileri */
  public $musteriTel;
  public $musteriMail;
  public $faturaAdi;

  /* Fiyat Bilgileri */
  public  $tutar=100;
  public  $paraBirimiKodu = 949;
  
kısmındaki fatura bilgileri bölümünü kullanıcınıza göre doldurup sonrasında $tutar değişkenine istediğiniz tutarı yolladıktan sonra, ilgili para birimi kodunu girdikten sonra isBankasiOdemeYap() fonksiyonunu çağrıyoruz.
