import os, sys, shlex, subprocess,time

alexatop100ussites = {"1": "google.com", "2": "facebook.com", "3": "youtube.com", "4": "amazon.com", "5": "yahoo.com", "6": "wikipedia.org", "7": "twitter.com", "8": "ebay.com", "9": "reddit.com", "10": "linkedin.com", "11": "imgur.com", "12": "craigslist.org", "13": "tumblr.com", "14": "go.com", "15": "netflix.com", "16": "pinterest.com", "17": "t.co", "18": "live.com", "19": "bing.com", "20": "blogspot.com", "21": "instagram.com", "22": "paypal.com", "23": "ziddu.com", "24": "cnn.com", "25": "espn.go.com", "26": "imdb.com", "27": "weather.com", "28": "chase.com", "29": "nytimes.com", "30": "huffingtonpost.com", "31": "apple.com", "32": "bankofamerica.com", "33": "yelp.com", "34": "buzzfeed.com", "35": "wordpress.com", "36": "diply.com", "37": "stackoverflow.com", "38": "microsoft.com", "39": "wellsfargo.com", "40": "msn.com", "41": "walmart.com", "42": "etsy.com", "43": "dropbox.com", "44": "wikia.com", "45": "zillow.com", "46": "intuit.com", "47": "aol.com", "48": "github.com", "49": "comcast.net", "50": "foxnews.com", "51": "salesforce.com", "52": "bestbuy.com", "53": "washingtonpost.com", "54": "amazonaws.com", "55": "about.com", "56": "usps.com", "57": "pandora.com", "58": "outbrain.com", "59": "reference.com", "60": "hulu.com", "61": "target.com", "62": "indeed.com", "63": "baidu.com", "64": "forbes.com", "65": "dailymail.co.uk", "66": "adobe.com", "67": "groupon.com", "68": "googleusercontent.com", "69": "cnet.com", "70": "ups.com", "71": "businessinsider.com", "72": "slickdeals.net", "73": "tripadvisor.com", "74": "pornhub.com", "75": "usatoday.com", "76": "americanexpress.com", "77": "xvideos.com", "78": "vimeo.com", "79": "homedepot.com", "80": "deviantart.com", "81": "flickr.com", "82": "capitalone.com", "83": "irs.gov", "84": "twitch.tv", "85": "microsoftonline.com", "86": "force.com", "87": "bleacherreport.com", "88": "stackexchange.com", "89": "googleapis.com", "90": "bbc.com", "91": "verizonwireless.com", "92": "newegg.com", "93": "wsj.com", "94": "kickass.to", "95": "fedex.com", "96": "att.com", "97": "gfycat.com", "98": "godaddy.com", "99": "ask.com", "100": "theguardian.com"}

quanttop100ussites = {'30': 'upworthy.com', '45': 'wetpaint.com', '60': 'photobucket.com', '61': 'topix.com', '62': 'dailydot.com', '63': 'brainjet.com', '65': 'theverge.com', '66': 'instructables.com', '67': 'ranker.com', '15': 'bustle.com', '34': 'rollingstone.com', '86': 'rottentomatoes.com', '87': 'jezebel.com', '84': 'deviantart.com', '85': 'independent.co.uk', '24': 'dose.com', '25': 'nbcnews.com', '26': 'sbnation.com', '81': 'mic.com', '20': 'inquisitr.com', '79': 'radaronline.com', '22': 'uproxx.com', '23': 'ijreview.com', '69': 'ask.fm', '47': '247sports.com', '44': 'examiner.com', '48': 'hubpages.com', '42': 'mobilelikez.com', '29': 'whitepages.com', '40': 'guff.com', '41': 'rare.us', '1': 'buzzfeed.com', '3': 'answers.com', '2': 'yelp.com', '5': 'littlethings.com', '4': 'diply.com', '7': 'playbuzz.com', '6': 'wikia.com', '8': 'urbandictionary.com', '78': 'vox.com', '49': 'gawker.com', '83': 'jumblejoy.com', '98': 'omgfacts.com', '75': 'quizlet.com', '38': 'theblaze.com', '73': 'deadspin.com', '72': 'salon.com', '71': 'dallasblack.com', '46': 'thechive.com', '91': 'ebaumsworld.com', '90': 'brainfall.com', '100': 'theonion.com', '92': 'glassdoor.com', '95': 'yourtango.com', '94': 'nj.com', '97': 'twentytwowords.com', '96': 'myrecipes.com', '11': 'usmagazine.com', '10': 'bleacherreport.com', '39': 'goodreads.com', '12': 'moviepilot.com', '59': 'city-data.com', '58': 'nbcsports.com', '14': 'drugs.com', '16': 'nydailynews.com', '19': 'babycenter.com', '54': 'imgur.com', '57': 'anchorfree.us', '56': 'gizmodo.com', '51': 'zergnet.com', '36': 'legacy.com', '53': 'ibtimes.com', '52': 'stackexchange.com', '33': 'opposingviews.com', '89': 'lifehacker.com', '88': 'thekitchn.com', '18': 'thoughtcatalog.com', '31': 'youngcons.com'} 


def command(args, timeout = 10):
	#print "Command: ", args
	args = shlex.split(args)
	p = subprocess.Popen(args, stdout=subprocess.PIPE)#, stdin=None, stdout=PIPE, stderr=None)

	timeout = int(timeout/0.01)
	op = ""

	if timeout ==0:
		timeout = 1

	time.sleep(0.01)
	for i in range(timeout):
		if p.poll() is  0:
			op, err = p.communicate(None)
			return op
		else:
			time.sleep(0.01)
	if p.poll() is not 0:
		p.kill()
		print "Timeout, killed process"
	else:
		op, err = p.communicate(None)
	return op


#
#for (k,v) in alexatop100ussites.iteritems():
#	os.system('wget -r -l 1 -k '+v)



from bs4 import BeautifulSoup

def findcdns(websitefolder, top100sites):
	websites = os.listdir(websitefolder)
	allcdns = set()
	allsites = set()
	for website in websites:
		#print website
		webfolder = os.path.join(websitefolder, website)
		webfiles = os.listdir(webfolder)
		lnks = set()
		lnks.add(website)
		allsites.add(website)
		for webf in webfiles:
			webff = os.path.join(webfolder, webf)
			if not os.path.isfile(webff):
				continue
			data = open(webff, 'r').read()
			soup = BeautifulSoup(data)
			for link in soup.find_all('a'):
				if not 'http' in str(link):
					continue
				try:
					lnk = link.get('href').replace('http://','')
					if '/' in lnk: lnk = lnk.split('/')[0]
					lnks.add(lnk)
				except:
					#print 'error', link
					#lnks.add(link)
					pass
		#print website, lnks
		#continue
		cdns = set()
		for lnk in lnks:
			lnk = str(lnk)
			#print lnk
			try:
				output = command('dig '+str(lnk))
			except:
				continue
			if 'CNAME' in output:
				outdata = output.split('CNAME')[1:]
				for od in outdata:
					ourl = od.split('\n')[0].strip()
					if '.' == ourl[-1]:
						ourl = ourl[:-1]
					ourl1 = ourl.split('.')[-2:]
					ourl1 = '.'.join(ourl1)
					#print ourl, ourl1
					cdns.add(ourl1)
					allcdns.add(ourl1)
					allsites.add(ourl1)
		if len(cdns) == 0:
			continue
		#print website, cdns
		#sys.exit(0)
	print "\nsites:",len(allsites), allsites
	print "\ballcdns:",len(allcdns), allcdns
	cdns = [x for x in allcdns if x not in top100sites.values()]
	print "cdns:", len(cdns), cdns
	return allsites, allcdns, cdns

websitefolder = os.path.join(os.getcwd(),'websites')
allsites, allcdns, cdns = findcdns(websitefolder, alexatop100ussites)
print '\n\nMobile:'
mobwebsitefolder = os.path.join(os.getcwd(),'mobilewebsites')
mallsites, mallcdns, mcdns = findcdns(mobwebsitefolder, quanttop100ussites)


