# Codeigniter Template - View 
`New member of the old world`

Bilgi
---
Projenizin  *proje_dizini/application/core/* klasörünün içerisine  **MY_Loader.php** dosyasını ekliyoruz.

Admin paneli ve Projenin view dosyalarını ayırıyoruz.

Kullanımı
---
`$this->load->template('sayfa_adi', $veri, FALSE);` Proje view dosyasının yolunu belirtmek için kullanılacak komut.
Etkileceği alan = *proje_dizini/themes/default/view* 

`$this->load->admin_template('sayfa_adi', $veri, FALSE);` Admin paneli view dosyasının yolunu belirtmek için kullanılacak komut.
Etkileceği alan = *proje_dizini/themes/admin/view* 

Böylece tasarımlarda Admin paneli ve Projenin view dosyalarını ayrı yerlerde tutarak karışıklığı önleyebiliriz.

**NOT:**  
```
proje_dizini/themes/default/
                           |-> assets/  # tasarım dosyalarının saklayabilirsizin
                           |-> view/  # tasarıma ait görünüm dosyaları
                                   |->includes  # header ve footer alanlarının dosyaları
```
