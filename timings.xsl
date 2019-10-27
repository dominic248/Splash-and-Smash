<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

    <tr style='background-color: #3DB2E6; color:black;'>
        <th>RIDE NAME</th>
        <th>OPENING TIME</th>
        <th>CLOSING TIME</th>
    </tr>
    <xsl:for-each select="CATALOG/CD">
        <tr>
            <td><xsl:value-of select="TITLE"/></td>
            <td><xsl:value-of select="TIMINGS"/></td>
            <td><xsl:value-of select="CLOSE"/></td>
        </tr>
    </xsl:for-each>


</xsl:template>
</xsl:stylesheet>