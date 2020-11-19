<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'Samsung',
                        'deskripsi_produk'   => 'Samsung Galaxy Z Flip'
                    ],
                    [
                        'nama_produk' => 'Apple',
                        'deskripsi_produk'   => 'iPhone 12 Pro Max'
                    ],
                    [
                        'nama_produk' => 'Oppo',
                        'deskripsi_produk'   => 'Oppo Reno Z'
                    ],
                    [
                        'nama_produk' => 'Vivo',
                        'deskripsi_produk'   => 'VIVO Y5S'
                    ],
                    [
                        'nama_produk' => 'Xiaomi',
                        'deskripsi_produk'   => 'Xiaomi Mi 9X'
                    ],

                ];

                  $this->db->table('produk')->insertBatch($data);

                // // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                //         $data
                // );

                // // Using Query Builder
              
        }
}
