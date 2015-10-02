require 'anemone'
require 'open-uri'
require 'FileUtils'
require 'nokogiri'

opts = {
	depth_limit: 0
}

# put url below
url = ''

Anemone.crawl(url, opts) do |anemone|
	anemone.on_every_page do |page|
		page.doc.xpath('//img').each do |node|

			img_path = node['src'].to_s

			img_path = url + img_path unless img_path.include? 'http'
			
			file_name = File.basename(img_path)
			dir_name = "/var/tmp/hogege/"
			file_path = dir_name + file_name

			FileUtils.mkdir_p(dir_name) unless FileTest.exist?(dir_name)

			open(file_path, 'wb') do |output|
				open(img_path) do |data|
					output.write(data.read)
				end
			end

		end
	end
end