# Codeigniter Template 
`New member of the old world`

Bilgi
---
Projenizin  *proje_dizini/application/core/* klasörünün içerisine  **MY_Loader.php** dosyasını ekliyoruz.

Bu işlemden sonra artık `$this->load->view();` yerine `$this->load->template();` kullanarak *proje_dizini/application/view/* dosyasının uzantısını  *proje_dizini/themes/default/view/* yaptık.
Böylece tasarım dosylarını bir yerde tutuyoruz.
