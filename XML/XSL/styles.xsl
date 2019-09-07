<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="shopbook">
        <html>
            <title>XSL </title>
        </html>
        <body>
            <p>Working with include xsl in xml</p>
            //Show value of xml
            <xsl:for-each select="book">
                <!--sort list-->
                 <xsl:sort select="page" order="ascending" data-type="number"></xsl:sort>
                    <ul class="xml">
                        <li>Tên tác giả:<xsl:value-of select="author"></xsl:value-of></li>
                        <li>Tên Sách:<xsl:value-of select="name"></xsl:value-of></li>
                        <!--condition-->
                        <xsl:if test="page >300">
                            <li>Trọng lượng:<xsl:value-of select="page"></xsl:value-of>
                                <xsl:value-of select="page/@units"></xsl:value-of>
                            </li>
                        </xsl:if>
                    </ul>
                <hr/>
            </xsl:for-each>
        </body>
    </xsl:template>

</xsl:stylesheet>