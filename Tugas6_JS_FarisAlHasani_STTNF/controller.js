import users from "./data.js";

// Fungsi untuk menampilkan data menggunakan map()
const index = () => {
    console.log("Daftar Pengguna:");
    users.map((user, index) => {
        console.log(`${index + 1}. Nama: ${user.nama}, Umur: ${user.umur}, Alamat: ${user.alamat}, Email: ${user.email}`);
    });
};

// Fungsi untuk menambahkan data ke dalam array
const store = (user) => {
    users.push(user);
    console.log(`Data ${user.nama} berhasil ditambahkan!`);
};

// Fungsi untuk menghapus data berdasarkan nama
const destroy = (nama) => {
    const index = users.findIndex(user => user.nama === nama);
    if (index !== -1) {
        users.splice(index, 1);
        console.log(`Data ${nama} berhasil dihapus!`);
    } else {
        console.log(`Data ${nama} tidak ditemukan!`);
    }
};

export { index, store, destroy };
