CREATE DATABASE nakam_food

USE DATABASE nakam_food
CREATE TABLE pelanggan
(
  telepon_pelangaan VARCHAR(12) NOT NULL,
  nama_depan VARCHAR(50) NOT NULL,
  inisial_tengah VARCHAR(2),
  nama_belakang VARCHAR(50) NOT NULL,
  surel VARCHAR(50) NOT NULL,
  PRIMARY KEY (telepon_pelangaan)
);

CREATE TABLE driver
(
  id_driver VARCHAR(10) NOT NULL,
  telepon_driver VARCHAR(12) NOT NULL,
  plat_nomor VARCHAR(11) NOT NULL,
  nama_depan VARCHAR(50) NOT NULL,
  inisial_tengah VARCHAR(2),
  nama_belakang VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_driver)
);

CREATE TABLE restoran
(
  nama_tempat VARCHAR(50) NOT NULL,
  alamat VARCHAR(150) NOT NULL,
  PRIMARY KEY (nama_tempat)
);

CREATE TABLE produk
(
  id_produk VARCHAR(7) NOT NULL,
  deskripsi VARCHAR(50) NOT NULL,
  kategori VARCHAR(25) NOT NULL,
  harga DECIMAL(10,2) NOT NULL,
  nama_tempat VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_produk, nama_tempat),
  FOREIGN KEY (nama_tempat) 
    REFERENCES restoran(nama_tempat)
    ON DELETE CASCADE
);

CREATE TABLE pesanan
(
  id_pemesanan VARCHAR(15) NOT NULL,
  tanggal DATE NOT NULL,
  alamat_pesanan VARCHAR(150) NOT NULL,
  telepon_pelanggan VARCHAR(12) NOT NULL,
  id_driver VARCHAR(10) NOT NULL,
  nama_tempat VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_pemesanan),
  FOREIGN KEY (telepon_pelanggan) 
    REFERENCES pelanggan(telepon_pelangaan)
    ON DELETE CASCADE,
  FOREIGN KEY (id_driver) 
    REFERENCES driver(id_driver)
    ON DELETE CASCADE,
  FOREIGN KEY (nama_tempat) 
    REFERENCES restoran(nama_tempat)
    ON DELETE CASCADE
);

CREATE TABLE barang_pesanan
(
  kuantitas INT NOT NULL,
  catatan VARCHAR(255) NOT NULL,
  nomor_barang INT NOT NULL,
  id_pemesanan VARCHAR(15) NOT NULL,
  id_produk VARCHAR(7) NOT NULL,
  nama_tempat VARCHAR(50)  NOT NULL,
  PRIMARY KEY (nomor_barang, id_pemesanan, id_produk, nama_tempat),
  FOREIGN KEY (id_pemesanan) 
    REFERENCES pesanan(id_pemesanan)
    ON DELETE CASCADE,
  FOREIGN KEY (id_produk) 
    REFERENCES produk(id_produk)
    ON DELETE CASCADE,
  FOREIGN KEY (nama_tempat) 
    REFERENCES restoran(nama_tempat)
    ON DELETE CASCADE
);

CREATE TABLE pembayaran
(
  tipe_pembayaran boolean NOT NULL,
  nomor_referensi VARCHAR(12) NOT NULL,
  id_pemesanan VARCHAR(12) NOT NULL,
  PRIMARY KEY (nomor_referensi, id_pemesanan),
  FOREIGN KEY (id_pemesanan) 
    REFERENCES pesanan(id_pemesanan)
    ON DELETE CASCADE
);
