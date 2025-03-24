// **Data Produk Awal (Minimal 5)**
let produkList = [
    { id: 1, nama: "Laptop", harga: 12000000 },
    { id: 2, nama: "Smartphone", harga: 5000000 },
    { id: 3, nama: "Tablet", harga: 7000000 },
    { id: 4, nama: "Mouse", harga: 250000 },
    { id: 5, nama: "Keyboard", harga: 450000 }
];

// **Menambahkan Produk dengan Spread Operator**
function tambahProduk(id, nama, harga) {
    produkList = [...produkList, { id, nama, harga }];
    console.log(`Produk ${nama} telah ditambahkan.`);
}

// **Menghapus Produk dengan Rest Parameter**
function hapusProduk(id) {
    produkList = produkList.filter(produk => produk.id !== id);
    console.log(`Produk dengan ID ${id} telah dihapus.`);
}

// **Menampilkan Produk dengan Destructuring**
function tampilkanProduk() {
    console.log("Daftar Produk:");
    produkList.forEach(({ id, nama, harga }) => {
        console.log(`ID: ${id}, Nama: ${nama}, Harga: Rp ${harga.toLocaleString()}`);
    });
}

// **Event Handler menggunakan Event Listener**
const eventHandler = {
    tambah: (id, nama, harga) => tambahProduk(id, nama, harga),
    hapus: (id) => hapusProduk(id),
    tampil: () => tampilkanProduk()
};

// **Menjalankan Fungsi**
eventHandler.tampil();
eventHandler.tambah(6, "Headset", 800000);
eventHandler.tampil();
eventHandler.hapus(3);
eventHandler.tampil();
