import { index, store, destroy } from "./controller.js";

// Menjalankan fungsi utama
const main = () => {
    index(); // Menampilkan data awal
    
    // Menambahkan 2 data baru
    store({ nama: "Data 11", umur: 30, alamat: "Jl. Data 11", email: "data11@example.com" });
    store({ nama: "Data 12", umur: 31, alamat: "Jl. Data 12", email: "data12@example.com" });

    index(); // Menampilkan data setelah ditambahkan

    // Menghapus salah satu data
    destroy("Data 3");

    index(); // Menampilkan data setelah penghapusan
};

// Jalankan fungsi main
main();
