<?php

/**
 *
 *
 * Paratika sanal pos (hpp) kurulumu için gerekli ayarları barınıdır.
 *
 * @category   Sanal Pos Kurulumu
 * @author     Hasan Kaya <info@hasankayaa.com>
 * @copyright  2021 Buhusoft
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01

 */

class isBankasiConfClass
{
  /* Satıcı bilgileri */
  public const clientid        = ""; //iş bankası tarafından verilen clientid.
  public const storekey        = ""; //storekey değeriniz
  public const islemTipi       = "Auth"; //işlem tipi
  public const returnURL       = ""; //dönüş urlsi
  public const storetype       = "3d_pay_hosting";
  public const postURL         = "https://spos.isbank.com.tr/fim/est3Dgate";

  /* Adres Faturalandırma İçin */
  public const firmaAdresi     = ""; //firma adresi
  public const firmaSehir      = ""; //firma şehir
  public const firmaPostaKodu  = ""; //firma posta kodu
  public const ulkeKodu        = "90"; //ülkenin kodu, 90 = TR
  public const firmaTelefon    = ""; //firma telefon numarası
  public const firmaAdi        = ""; //firma adı
  public const firmaIlce        = ""; //firma İlçe
}





 ?>

