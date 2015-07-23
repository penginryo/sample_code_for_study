# 必要なgemを読み込み。読み込み方やその意味はrubyの基本をおさらいして下さい。
require 'nokogiri'
require 'anemone'

opts = {
	depth_limit: 0
}

Anemone.crawl("http://paiza.jp/job_offers", opts) do |anemone|
	anemone.on_every_page do |page|
		page.doc.xpath("//li[@class='fw_tag font14 priority']").each do |node|
			lang = node.xpath("./a/text()").to_s
			puts lang
			puts "----------------------------\n"
		end
	end
end
