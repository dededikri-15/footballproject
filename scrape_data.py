import pandas as pd

# Kita baca file yang sudah Anda simpan tadi
try:
    # Membaca file HTML lokal
    with open('premiere.html', 'r', encoding='utf-8') as f:
        html_content = f.read()

    # Menggunakan 'match' untuk mencari tabel yang berisi kata 'Squad' (ciri khas tabel klasemen)
    df = pd.read_html(html_content, match="Squad")[0] 
    
    # Simpan ke CSV
    df.to_csv("klasemen_akhir.csv", index=False)
    print("Sukses! Data telah disimpan ke klasemen_akhir.csv")

except Exception as e:
    print(f"Error: {e}")