<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="shop">
        <html>
            <title>XSL </title>
        </html>
        <body>
            <p>Working with include xsl in xml</p>
            //Show value of xml

                <!--sort list-->

                <ul class="xml">
                  //Get Item[2] of book<br/>
                    <xsl:value-of select="book[2]"></xsl:value-of>
                    <br/>
                    <xsl:value-of select="book[last()]"></xsl:value-of>
                   <br></br>  //Get @id of book<br/>
                    <xsl:value-of select="book['22']"></xsl:value-of>

                </ul>
                <hr/>
            //Get to conditions
            <!--get value book up 70$-->
            <ul>
                <xsl:for-each select="book">
                    <xsl:if test="price/real &gt; 25.0">
                        <li><xsl:value-of select="."></xsl:value-of></li><br/>
                    </xsl:if>
                </xsl:for-each>
            </ul>
          <hr></hr>
            <!--case 2:-->
            <ul>
                <xsl:for-each select="book[price/real = price/saleoff]">

                        <li><xsl:value-of select="name"></xsl:value-of></li><br/>

                </xsl:for-each>
            </ul>
        </body>
    </xsl:template>

</xsl:stylesheet>