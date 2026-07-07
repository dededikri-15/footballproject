from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import pandas as pd
import time

# Konfigurasi agar Chrome berjalan di latar belakang (Headless)
chrome_options = Options()
chrome_options.add_argument("--headless") 
driver = webdriver.Chrome(options=chrome_options)

url = "https://www.flashscore.co.id/sepak-bola/inggris/liga-primer-2025-2026/peringkat/OEEq9Yvp/peringkat/keseluruhan/"

try:
    driver.get(url)
    # Tunggu sebentar agar data tabel muncul
    time.sleep(10) 
    
    # Ambil sumber halaman yang sudah ter-render
    html = driver.page_source
    
    # Baca tabel menggunakan pandas
    dfs = pd.read_html(html)
    
    # Biasanya klasemen ada di tabel pertama (indeks 0)
    df = dfs[0]
    
    # Simpan ke CSV
    df.to_csv("klasemen_premier_league.csv", index=False)
    print("Berhasil! Data telah disimpan ke klasemen_premier_league.csv")
    
except Exception as e:
    print(f"Terjadi error: {e}")

finally:
    driver.quit()