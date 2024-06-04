@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        pre {
            background-color: #656661;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow: auto;
            font-size: 14px;
        }

        code {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>

    <h1>Menampilkan Kode Java di Halaman Web</h1>
    <p>Berikut adalah contoh kode Java untuk memutar audio menggunakan Java Sound API:</p>
    <pre><code>
    import javax.sound.sampled.*;
    import java.io.File;
    import java.io.IOException;

    public class PlayAudio {

    public static void main(String[] args) {
        // Nama file audio
        String audioFilePath = "audio.wav";
        File audioFile = new File(audioFilePath);
        
        // Pastikan file audio ada
        if (!audioFile.exists()) {
            System.out.println("File audio tidak ditemukan: " + audioFilePath);
            return;
        }
        
        try {
            // Mendapatkan AudioInputStream dari file audio
            AudioInputStream audioStream = AudioSystem.getAudioInputStream(audioFile);
            
            // Mendapatkan format audio
            AudioFormat format = audioStream.getFormat();
            
            // Mendapatkan line untuk pemutaran audio
            DataLine.Info info = new DataLine.Info(Clip.class, format);
            Clip audioClip = (Clip) AudioSystem.getLine(info);
            
            // Membuka clip dan memuat audio ke dalamnya
            audioClip.open(audioStream);
            
            // Memutar audio
            audioClip.start();
            
            System.out.println("Memutar audio...");

            // Membuat program tetap berjalan sampai audio selesai diputar
            while (!audioClip.isRunning())
                Thread.sleep(10);
            while (audioClip.isRunning())
                Thread.sleep(10);

            // Menutup resources
            audioClip.close();
            audioStream.close();
            
            System.out.println("Pemutaran selesai.");
            
        } catch (UnsupportedAudioFileException ex) {
            System.out.println("Format file audio tidak didukung.");
            ex.printStackTrace();
        } catch (LineUnavailableException ex) {
            System.out.println("Line audio tidak tersedia.");
            ex.printStackTrace();
        } catch (IOException ex) {
            System.out.println("Terjadi kesalahan saat membaca file audio.");
            ex.printStackTrace();
        } catch (InterruptedException ex) {
            ex.printStackTrace();
        }
    }
}
</code></pre>

    <img src="{{ asset('images/icon_RB.png') }}" alt="">
@endsection
