<?php
namespace App\Controllers;

use App\Models\Produto;
use Mpdf\Mpdf;

class ProdutoController
{
    public function gerarRelatorio()
    {
        $produtos = Produto::getAll();
        ob_start();
        require __DIR__ . '/../views/relatorio_produtos.php';
        $html = ob_get_clean();

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output('relatorio_produtos.pdf', 'I');
    }
}