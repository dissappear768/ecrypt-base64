<?php
        // Print out main menu..
    echo "=========================\n";
    echo "Dissappear Decode  Encode\n";
    echo "=========================\n";
    echo "Select an option..\n\n";
    echo "    1) Decode base64\n";
    echo "    2) Encode Base64\n";
    echo "    x) Exit\n";
    echo "Pilih Type Encode : ";
    switch(trim(fgets(STDIN,256)))
        {
            case 1:
                echo "Masukkan Kata Yang Akan di Encode : ";
                $kata = trim(fgets(STDIN));
                echo "Encode Base64 :",base64_encode($kata),"\n";
		exit();
            case 2:
                echo "Masukkan Kata Yang Akan di Encode : ";
                $kata = base64_decode(fgets(STDIN));
                echo "Decode Base64 :",trim($kata),"\n";
                exit();
               }
    // Close standard in..
    fclose(STDIN);
?>
