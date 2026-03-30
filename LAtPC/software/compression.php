<?php
/**
 * Compression Component
 * Modularized from software.php
 */
?>
<article class="fullbar">
    <?php sw_breadCrumbs(); ?>
    <h1>Compression</h1>
    <div class="blurb">
        <section class="intro">
            <p tabindex="0" class="selection">
                File compression is a fundamental technology that revolutionized digital storage and transmission by
                reducing file sizes while preserving their content. This essential process enables efficient storage
                utilization and faster data transmission across networks.
            </p>
        </section>

        <section class="timeline">
            <h2>Evolution of File Compression</h2>
            <div class="timeline-grid">
                <div class="timeline-item" tabindex="0">
                    <h3>1960s: The Beginning</h3>
                    <p class="selection">
                        The era of run-length encoding marked the dawn of file compression. This pioneering method was
                        primarily used for compressing data on magnetic tapes by consolidating repeated data values.
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3>1980s: The PC Revolution</h3>
                    <p class="selection">
                        The personal computer boom sparked the development of more sophisticated compression algorithms.
                        The groundbreaking Lempel-Ziv-Welch (LZW) algorithm emerged, powering popular formats like GIF
                        and ZIP.
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3>1990s: The Internet Age</h3>
                    <p class="selection">
                        The rise of the internet and multimedia content drove the creation of specialized compression
                        formats. Revolutionary standards like MP3 for audio and JPEG for images transformed digital
                        media distribution.
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3>Today: Modern Compression</h3>
                    <p class="selection">
                        Modern compression technology offers diverse solutions for different data types, balancing
                        compression efficiency with processing speed and compatibility.
                    </p>
                </div>
            </div>
        </section>

        <section class="compression-formats">
            <h2>Popular Compression Directory Formats</h2>
            <div class="formats-grid">
                <details class="format-card">
                    <summary tabindex="0" class="selection">ZIP Format</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Features:</h4>
                            <ul>
                                <li>Multi-file archiving</li>
                                <li>Password protection</li>
                                <li>Universal compatibility</li>
                                <li>Industry standard format</li>
                            </ul>
                            <p>The most widely used compression format, perfect for general-purpose file compression and
                                archiving.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">RAR Format</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Features:</h4>
                            <ul>
                                <li>Advanced compression</li>
                                <li>Archive splitting</li>
                                <li>Error recovery</li>
                                <li>Strong encryption</li>
                            </ul>
                            <p>A powerful format offering advanced features and superior compression ratios for complex
                                archiving needs.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">TAR Format</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Features:</h4>
                            <ul>
                                <li>Unix-style archiving</li>
                                <li>Metadata preservation</li>
                                <li>Combinable with compression</li>
                                <li>Perfect for backups</li>
                            </ul>
                            <p>Commonly used in Unix-like systems, often combined with compression algorithms like gzip
                                or bzip2.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">GZ Format</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Features:</h4>
                            <ul>
                                <li>DEFLATE algorithm</li>
                                <li>Fast compression</li>
                                <li>Single-file focus</li>
                                <li>Cross-platform support</li>
                            </ul>
                            <p>Efficient single-file compression using the DEFLATE algorithm, ideal for quick
                                compression tasks.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">BZ2 Format</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Features:</h4>
                            <ul>
                                <li>High compression ratio</li>
                                <li>Block-sorting compression</li>
                                <li>Data integrity checks</li>
                                <li>Open-source format</li>
                            </ul>
                            <p>Offers superior compression ratios using the bzip2 algorithm, perfect for text-based
                                content.</p>
                        </div>
                    </fieldset>
                </details>
            </div>
        </section>

        <section class="other-compression">
            <h2>Other Compression Technologies</h2>
            <div class="formats-grid">
                <details class="format-card">
                    <summary tabindex="0" class="selection">Image Compression</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Popular Formats:</h4>
                            <ul>
                                <li>JPEG - Lossy compression for photos</li>
                                <li>PNG - Lossless with transparency support</li>
                                <li>WebP - Modern format with superior compression</li>
                                <li>AVIF - Next-gen format with excellent quality</li>
                            </ul>
                            <p>Image compression balances visual quality with file size, using specialized algorithms
                                optimized for visual data.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">Audio Compression</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Popular Formats:</h4>
                            <ul>
                                <li>MP3 - Universal lossy audio format</li>
                                <li>AAC - Advanced audio coding</li>
                                <li>FLAC - Lossless audio compression</li>
                                <li>Opus - Modern low-latency codec</li>
                            </ul>
                            <p>Audio compression leverages psychoacoustic models to remove imperceptible sounds,
                                achieving significant size reduction.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">Video Compression</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Popular Codecs:</h4>
                            <ul>
                                <li>H.264/AVC - Industry standard codec</li>
                                <li>H.265/HEVC - High efficiency video coding</li>
                                <li>VP9 - Open-source alternative</li>
                                <li>AV1 - Royalty-free next-gen codec</li>
                            </ul>
                            <p>Video compression uses temporal and spatial redundancy reduction, enabling efficient
                                streaming and storage of video content.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">Modern Algorithms</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Advanced Technologies:</h4>
                            <ul>
                                <li>Zstandard (zstd) - Fast with high compression</li>
                                <li>Brotli - Web-optimized compression</li>
                                <li>LZMA - Extreme compression ratios</li>
                                <li>7-Zip - Multi-algorithm archiver</li>
                            </ul>
                            <p>Modern compression algorithms offer improved speed and efficiency, optimized for
                                contemporary hardware and use cases.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">Database Compression</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Key Features:</h4>
                            <ul>
                                <li>Columnar compression for analytics</li>
                                <li>Dictionary encoding</li>
                                <li>Run-length encoding (RLE)</li>
                                <li>Transparent compression layers</li>
                            </ul>
                            <p>Database compression reduces storage costs while maintaining query performance through
                                specialized compression techniques.</p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection">Network Compression</summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4>Technologies:</h4>
                            <ul>
                                <li>HTTP compression (gzip, Brotli)</li>
                                <li>VPN compression protocols</li>
                                <li>TCP/IP header compression</li>
                                <li>Real-time streaming compression</li>
                            </ul>
                            <p>Network compression reduces bandwidth usage and improves transmission speeds for web
                                content and data transfers.</p>
                        </div>
                    </fieldset>
                </details>
            </div>
        </section>
    </div>
</article>
