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
    <p>Berikut adalah contoh kode Java untuk memutar audio menggunakan Java netbeans :</p>

    <p>Unduh file audip Player</p>
    <button class="btn btn-success" id="downloadBtn">Unduh File ZIP</button>
    <br>
    <br>

    <pre><code>
        package Audio;

        import java.io.*;
        import java.util.logging.Level;
        import java.util.logging.Logger;
        import javax.sound.sampled.AudioInputStream;
        import javax.sound.sampled.AudioSystem;
        import javax.sound.sampled.Clip;
        import javax.sound.sampled.LineUnavailableException;
        import javax.sound.sampled.UnsupportedAudioFileException;
        import sun.audio.*;
        import sun.audio.*;
        
        public class audio extends javax.swing.JFrame {
            private Clip clip;
        
            public audio() {
                initComponents();
            }
            
            @SuppressWarnings('unchecked')
            // <editor-fold defaultstate="collapsed" desc="Generated Code">                          
            private void initComponents() {
        
                jPanel2 = new javax.swing.JPanel();
                jButton2 = new javax.swing.JButton();
                jButton1 = new javax.swing.JButton();
                jLabel2 = new javax.swing.JLabel();
                jLabel3 = new javax.swing.JLabel();
                jLabel1 = new javax.swing.JLabel();
        
                setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        
                jButton2.setText("Stop");
                jButton2.addActionListener(new java.awt.event.ActionListener() {
                    public void actionPerformed(java.awt.event.ActionEvent evt) {
                        jButton2ActionPerformed(evt);
                    }
                });
        
                jButton1.setText("Play");
                jButton1.addActionListener(new java.awt.event.ActionListener() {
                    public void actionPerformed(java.awt.event.ActionEvent evt) {
                        jButton1ActionPerformed(evt);
                    }
                });
        
                jLabel3.setText("everything works out in the end instrumental 1 menit");
        
                jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Audio/img/213.png"))); // NOI18N
        
                javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
                jPanel2.setLayout(jPanel2Layout);
                jPanel2Layout.setHorizontalGroup(
                    jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(jLabel2)
                        .addGap(285, 285, 285))
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(jPanel2Layout.createSequentialGroup()
                                .addGap(195, 195, 195)
                                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 472, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 472, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addGroup(jPanel2Layout.createSequentialGroup()
                                .addGap(280, 280, 280)
                                .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, 264, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addComponent(jLabel1))
                        .addGap(0, 0, Short.MAX_VALUE))
                );
                jPanel2Layout.setVerticalGroup(
                    jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jLabel2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 85, Short.MAX_VALUE)
                        .addComponent(jLabel3)
                        .addGap(13, 13, 13)
                        .addComponent(jButton1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jButton2))
                );
        
                javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
                getContentPane().setLayout(layout);
                layout.setHorizontalGroup(
                    layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(0, 0, 0)
                        .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                );
                layout.setVerticalGroup(
                    layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jPanel2, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                );
        
                pack();
            }// </editor-fold>                        
        
            // Tombol stop 
            private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {                                         
                if (clip != null && clip.isRunning()) {
                    // BAgian Untuk Menghentikan Audio Yang sedang diputar
                    clip.stop();
                }
            }                                        
        
            private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {                                         
                // TODO add your handling code here:
                if (clip == null || !clip.isRunning()) {
                    try {
                        AudioInputStream audioInputStream = AudioSystem.getAudioInputStream(new File("D:\\ever.wav"));
        
                        clip = AudioSystem.getClip();
                        clip.open(audioInputStream);
        
                        // Bagian Tombol untuk Memutar audio
                        clip.start();
                    } catch (UnsupportedAudioFileException | IOException | LineUnavailableException ex) {
                        Logger.getLogger(audio.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            }                                        
        
            /**
             * @param args the command line arguments
             */
            public static void main(String args[]) {
                /* Set the Nimbus look and feel */
                //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
                /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
                 * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
                 */
                try {
                    for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                        if ("Nimbus".equals(info.getName())) {
                            javax.swing.UIManager.setLookAndFeel(info.getClassName());
                            break;
                        }
                    }
                } catch (ClassNotFoundException ex) {
                    java.util.logging.Logger.getLogger(audio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
                } catch (InstantiationException ex) {
                    java.util.logging.Logger.getLogger(audio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
                } catch (IllegalAccessException ex) {
                    java.util.logging.Logger.getLogger(audio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
                } catch (javax.swing.UnsupportedLookAndFeelException ex) {
                    java.util.logging.Logger.getLogger(audio.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
                }
                //</editor-fold>
        
                /* Create and display the form */
                java.awt.EventQueue.invokeLater(() -> {
                    new audio().setVisible(true);
                });
            }
        
            // Variables declaration - do not modify                     
            private javax.swing.JButton jButton1;
            private javax.swing.JButton jButton2;
            private javax.swing.JLabel jLabel1;
            private javax.swing.JLabel jLabel2;
            private javax.swing.JLabel jLabel3;
            private javax.swing.JPanel jPanel2;
            // End of variables declaration                   
        }
        
</code></pre>

    <h1>Output</h1>
    <pre>
    <code>
        <img src="{{ asset('images/audio.png') }}" alt="">
    </code>
</pre>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            var link = document.createElement('a');
            link.href = ''; // Ganti dengan path file ZIP Anda
            link.download = 'audioPlayer.zip'; // Nama file yang akan diunduh
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>
@endsection
