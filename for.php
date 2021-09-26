<html>
    <body>
        <?php
            echo "Mencari jumlah huruf vokal dalam suatu kata";
            $jumlah = 0;
            $kata="Belajar PHP"; // ganti aris
            $huruf="a"; // huruf vokal yang dicari bisa huruf a,e,i,u,o
            for ($i=0; $i<strlen ($kata); $i++)
            {
                if(substr ($kata, $i, 1) == $huruf)
                {
                    $jumlah ++;
                }
            }
            echo "Jumalh huruf " . $huruf . "dalam kata" . $kata . ":"; 
            echo $jumlah;

        ?>
    </body>
</html>